<?php

/* This function removes all the scores which are invalid in the LOGIN table by resetting the values. */
/* Invalid scores are scores which are generated due to errors/premature submissions in the test, etc. */
/* The latest entry by a student is considered as the final score. */
function removeInvalidScores() {

	$scoresArray = array();
	$deleteString = "UPDATE LOGIN SET LOGGED_IN = 0, REG_NO = '0', NAME = '0', DEPT = 'CSE', EMAIL = '0', SEC_1 = 0, SEC_2 = 0, SEC_3 = 0, SEC_4 = 0, SEC_5 = 0, TOTAL_SCORE = 0 WHERE TERMINAL_NO IN (";

	/* We get the terminal numbers of the invalid scores or rows. */
	try{
	    
		$conn = getConnection();	
		$sql_stmt = "SELECT TERMINAL_NO, REG_NO FROM LOGIN2 WHERE LOGGED_IN = 1;";
		$results = executeQuery($conn, $sql_stmt);

		/* When new reg_no is encountered, we push in array. */
		/* If already exists, the terminal_no is */
		foreach($results as $row) {
			if(empty($scoresArray[$row['REG_NO']])) {
				$scoresArray[$row['REG_NO']] = $row['TERMINAL_NO'];
			}
			else {
				$prevNum = $scoresArray[$row['REG_NO']];
				$scoresArray[$row['REG_NO']] = $row['TERMINAL_NO'];
				$deleteString .= "'$prevNum',";
			}
		}

		$deleteString .= "'exam000');";

		/* We reset the invalid rows. */
		$sql=$conn->prepare($deleteString);
		$sql->execute();

	} catch (PDOExcpetion $e){
		echo $e."<br>";
	}

}

/* We push the scores from LOGIN table into the SCORES table. */
function pushToScoresTable() {
	try {
		$conn = getConnection();
		$sql_stmt = "INSERT INTO SCORES SELECT REG_NO, NAME, DEPT, EMAIL, SET_NO, SEC_1, SEC_2, SEC_3, SEC_4, SEC_5, TOTAL_SCORE FROM LOGIN WHERE LOGGED_IN = 1;";
		
		/* We reset the invalid rows. */
		$sql=$conn->prepare($sql_stmt);
		$sql->execute();

	} catch (PDOException $e) {
		echo $e."<br>";
	}
}

/* We reset all the records in the LOGIN table. */
function resetLoginTable() {
	try {
		$conn = getConnection();
		$sql_stmt = "UPDATE LOGIN SET LOGGED_IN = 0, REG_NO = '0', NAME = '0', DEPT = 'CSE', EMAIL = '0', SEC_1 = 0, SEC_2 = 0, SEC_3 = 0, SEC_4 = 0, SEC_5 = 0, TOTAL_SCORE = 0;";
		
		/* We reset the invalid rows. */
		$sql=$conn->prepare($sql_stmt);
		$sql->execute();

	} catch (PDOException $e) {
		echo $e."<br>";
	}
}

function sanitizeScoresInDatabase() {
	removeInvalidScores();
	pushToScoresTable();
	resetLoginTable();
}

?>

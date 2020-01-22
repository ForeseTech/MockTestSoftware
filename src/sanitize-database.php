<?php

require("sql-connections.php");
require("sql-functions.php");

/* This function finds all the scores which are invalid in the LOGIN table. */
/* Invalid scores are scores which are generated due to errors/premature submissions in the test, etc. */
function findInvalidScores() {

	$scoresArray = array();
	$deleteArray = array();

	/* Get number of scores in table. */
	try{
	    
		$conn = getConnection();	
		$sql_stmt = "SELECT TERMINAL_NO, REG_NO FROM LOGIN2 WHERE LOGGED_IN = 1;";

		$results = executeQuery($conn, $sql_stmt);
		$conn = NULL;

		foreach($results as $row) {
			if(empty($scoresArray[$row['REG_NO']])) {
				$scoresArray[$row['REG_NO']] = $row['TERMINAL_NO'];
			}
			else {

			}
		}

		$scoresNum = $results[0]['SCORECOUNT'];
	
	} catch (PDOException $e) {
		echo "$e";
	}

	/* We declare an array of size scoresNum. */

}

?>

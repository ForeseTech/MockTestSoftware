<?php

/**********************/
/* CSV-GENERATION.PHP */
/**********************/

function generateCSV() {

	$csv = "REG_NO,NAME,DEPT,TOTAL_SCORE\n";

	try{
	    
		$conn = getConnection();	
		$sql_stmt = "SELECT REG_NO, NAME, DEPT, TOTAL_SCORE FROM SCORES ORDER BY DEPT, TOTAL_SCORE DESC;";
		$results = executeQuery($conn, $sql_stmt);

		foreach($results as $row) {
			$csv .= $row['REG_NO'].",".$row['NAME'].",".$row['DEPT'].",".$row['TOTAL_SCORE']."\n";
		}

	} catch (PDOExcpetion $e){
		echo $e."<br>";
	}

	$csvfile = fopen("../../database/MOCKS20-data.csv","w");
	fwrite($csvfile,$csv);
	fclose($csvfile);

}

?>

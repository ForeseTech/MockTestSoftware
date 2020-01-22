<?php

/**********************/
/* CSV-GENERATION.PHP */
/**********************/

function generateCSV() {

	$csv = "REG_NO,NAME,DEPT,EMAIL,SET_NO,SEC_1,SEC_2,SEC_3,SEC_4,SEC_5,TOTAL_SCORE\n";

	try{
	    
		$conn = getConnection();	
		$sql_stmt = "SELECT REG_NO, NAME, DEPT, EMAIL, SET_NO, SEC_1, SEC_2, SEC_3, SEC_4, SEC_5, TOTAL_SCORE FROM SCORES ORDER BY DEPT, TOTAL_SCORE DESC;";
		$results = executeQuery($conn, $sql_stmt);

		foreach($results as $row) {
			$csv .= $row['REG_NO'].",".$row['NAME'].",".$row['DEPT'].",".$row['EMAIL'].",".$row['SET_NO'].",".$row['SEC_1'].",".$row['SEC_2'].",".$row['SEC_3'].",".$row['SEC_4'].",".$row['SEC_5'].",".$row['TOTAL_SCORE']."\n";
		}

	} catch (PDOExcpetion $e){
		echo $e."<br>";
	}

	$csvfile = fopen("../../database/MOCKS20-data.csv","w");
	fwrite($csvfile,$csv);
	fclose($csvfile);

}

?>

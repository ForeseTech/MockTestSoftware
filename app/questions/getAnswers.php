<?php

/******************/
/* GETANSWERS.PHP */
/******************/

/* This PHP file outputs the list of answers for the current question set. */

/* We first include the necessary libraries and start the session. */
session_start();
require "../../src/sql-connections.php";
require "../../src/sql-functions.php";
require "../../src/utilities.php";

try {

	$conn = getConnection();
	$sql_stmt = "SELECT CORRECTOPT FROM ".$_SESSION['dept'].$_SESSION['setNum'].";";
	$results = executeQuery($conn, $sql_stmt);
	
	foreach($results as $row) {
		$ans = $row['CORRECTOPT'];
	
		if($ans == "A") {
			echo "1";
		}
		else if($ans == "B") {
			echo "2";
		}
		else if($ans == "C") {
			echo "3";
		}
		else {
			echo "4";
		}
	}

}
catch (PDOException $e) {
	echo "$e<br>";
}

?>

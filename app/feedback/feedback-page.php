<?php

/********************/
/* FEEDBACK-PHP.PHP */
/********************/

/* We start the session and include necessary libraries. */
session_start();
require("../../src/sql-connections.php");
require("../../src/utilities.php");

$comments=$_POST['commentsInput'];
$ratings=$_POST['ratingsInput'];


try{
	$conn=getConnection();
	$sql_stmt="INSERT INTO COMMENTS VALUES (COMMENT_NO, ?, ?, ?);";

	$sql=$conn->prepare($sql_stmt);
	$sql->bindParam(1, $_SESSION['regNum']);
	$sql->bindParam(2, $comments);
	$sql->bindParam(3, $ratings);
	$sql->execute();

} catch (PDOExcpetion $e){
	echo $e."<br>";
}

session_unset();
session_destroy();

redirectToLogin(0);
?>

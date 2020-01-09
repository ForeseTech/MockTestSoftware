<?php

/********************/
/* FEEDBACK-PHP.PHP */
/********************/

/* We start the session and include necessary libraries. */
require("../../src/sql-connections.php");
require("../../src/utilities.php");

$comments=$_POST['commentsInput'];
$ratings=$_POST['ratingsInput'];


try{
	$conn=getConnection();
	$sql_stmt="INSERT INTO COMMENTS VALUES (COMMENT_NO, ?, ?);";

	$sql=$conn->prepare($sql_stmt);
	$sql->bindParam(1, $comments);
	$sql->bindParam(2, $ratings);
	$sql->execute();

} catch (PDOExcpetion $e){
	echo $e."<br>";
}

redirectToLogin(0);
?>

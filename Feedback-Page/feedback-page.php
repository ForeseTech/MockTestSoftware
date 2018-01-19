<?php
session_start();

function setConn(){
	$servername="localhost";
	$user="root";
	$pass="";
	$dbname="MOCKS";

    $CONN=new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);
    $CONN->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $CONN;
}

$comments=$_POST['commentsInput'];
$ratings=$_POST['ratingsInput'];


try{
    $conn=setConn();
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

echo "<script>window.location.href='../Login-Page/loginpage.html';</script>";
?>
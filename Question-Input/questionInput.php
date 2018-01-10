<?php
function setConn(){
	$servername="localhost";
	$user="root";
	$pass="";
	$dbname="MOCKS";
	
    $CONN=new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);
    $CONN->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $CONN;
}

$question=$_POST['quesInput'];
$opta=$_POST['optaInput'];
$optb=$_POST['optbInput'];
$optc=$_POST['optcInput'];
$optd=$_POST['optdInput'];
$setno=0;

try{
    $conn=setConn();

	$sql_stmt="INSERT INTO questions VALUES (QUESTION_NO, ?,?,?,?,?,?)";
	$sql=$conn->prepare($sql_stmt);
	$sql->bindParam(1, $question);
	$sql->bindParam(2, $opta);
	$sql->bindParam(3, $optb);
	$sql->bindParam(4, $optc);
	$sql->bindParam(5, $optd);
	$sql->bindParam(6, $setno);
	$sql->execute();
	
	echo "<script>window.location.href='questionInput.html';</script>";
	
} catch (PDOException $e){
	echo $e."<br>";
}
?>
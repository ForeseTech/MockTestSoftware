/*
	This file was used to automate the process of transferring data from the 'questions' table to one of the set tables. This file may have no use anymore since the 'questions' table is out of the question.
*/

<?php

$q=$_REQUEST['q'];

function setConn(){
	$servername="localhost";
	$user="root";
	$pass="";
	$dbname="MOCKS";

    $CONN=new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);
    $CONN->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $CONN;
}

try{
	$conn=setConn();

	$sql_stmt="SELECT* FROM QUESTIONS WHERE SET_NO=$q;";

	$stmt = $conn->query($sql_stmt);
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$question="";
	$OPTA="";
	$OPTB="";
	$OPTC="";
	$OPTD="";
	$SET_NO="";
	$PICTURE="NONE";

	foreach($results as $row){
		$question=$row['QUESTION_TEXT'];
		$OPTA=$row['OPTA'];
		$OPTB=$row['OPTB'];
		$OPTC=$row['OPTC'];
		$OPTD=$row['OPTD'];
		$SET_NO=$row['SET_NO'];
		
	    $conn=setConn();
		$sql_stmt="INSERT INTO SET$SET_NO VALUES (QUESTION_NO, ?, ?, ?, ?, ?, ?);";
		
		$sql=$conn->prepare($sql_stmt);
		$sql->bindParam(1, $question);
		$sql->bindParam(2, $OPTA);
		$sql->bindParam(3, $OPTB);
		$sql->bindParam(4, $OPTC);
		$sql->bindParam(5, $OPTD);
		$sql->bindParam(6, $PICTURE);
		$sql->execute();
	}
} catch (PDOException $e){
	echo $e."<br>";
}
?>

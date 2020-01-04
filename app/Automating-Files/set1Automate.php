/*
	This file can be used to transfer a bulk amount of data between two chosen tables.
*/

<?php

function setConn(){
	$servername="localhost";
	$user="aravind2210";
	$pass="Superman123!";
	$dbname="MOCKS18";

    $CONN=new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);
    $CONN->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $CONN;
}

try{
	$conn=setConn();

	$sql_stmt="SELECT* FROM SET2 WHERE QUESTION_NO IN (21,22,23,24,25);";

	$stmt = $conn->query($sql_stmt);
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$question="";
	$OPTA="";
	$OPTB="";
	$OPTC="";
	$OPTD="";
	$PICTURE="";

	foreach($results as $row){
		$question=$row['QUESTION_TEXT'];
		$OPTA=$row['OPTA'];
		$OPTB=$row['OPTB'];
		$OPTC=$row['OPTC'];
		$OPTD=$row['OPTD'];
        $PICTURE=$row['PICTURE'];
		
	    $conn=setConn();
		$sql_stmt="INSERT INTO SET1 VALUES (QUESTION_NO, ?, ?, ?, ?, ?, ?);";
		
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

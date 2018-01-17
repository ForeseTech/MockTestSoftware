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

	$sql_stmt="SELECT* FROM LOGIN WHERE LOGGED_IN=1;";

	$stmt = $conn->query($sql_stmt);
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$regNum="";
	$name="";
	$dept="";
	$email="";
	$sec1="";
	$sec2="";
	$sec3="";
	$sec4="";
	$sec5="";
	$score="";

	foreach($results as $row){
		$regNum=$row['REG_NO'];
		$name=strtoupper($row['NAME']);
		$dept=$row['DEPT'];
		$email=$row['EMAIL'];
		$sec1=$row['SEC_1'];
		$sec2=$row['SEC_2'];
		$sec3=$row['SEC_3'];
		$sec4=$row['SEC_4'];
		$sec5=$row['SEC_5'];
		$score=$row['TOTAL_SCORE'];
		
	    $conn=setConn();
		$sql_stmt="INSERT INTO SCORES VALUES (STUD_NO, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
		
		$sql=$conn->prepare($sql_stmt);
		$sql->bindParam(1, $regNum);
		$sql->bindParam(2, $name);
		$sql->bindParam(3, $dept);
		$sql->bindParam(4, $email);
		$sql->bindParam(5, $sec1);
		$sql->bindParam(6, $sec2);
		$sql->bindParam(7, $sec3);
		$sql->bindParam(8, $sec4);
		$sql->bindParam(9, $sec5);
		$sql->bindParam(10, $score);
		$sql->execute();
	}
} catch (PDOException $e){
	echo $e."<br>";
}
?>
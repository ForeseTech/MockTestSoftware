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

$i=1;

while($i<1000){
	$terminalName="";
	if($i<10){
		$terminalName="exam00$i";
	}
	else if($i<100){
		$terminalName="exam0$i";
	}
	else{
		$terminalName="exam$i";
	}
	
	try{
	    $conn=setConn();
		
		$num=0;
		$str="0";

		$sql_stmt="INSERT INTO LOGIN VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$sql=$conn->prepare($sql_stmt);
		$sql->bindParam(1, $terminalName);
		$sql->bindParam(2, $num);
		$sql->bindParam(3, $i);
		$sql->bindParam(4, $str);
		$sql->bindParam(5, $str);
		$sql->bindParam(6, $str);
		$sql->bindParam(7, $num);
		$sql->bindParam(8, $num);
		$sql->bindParam(9, $num);
		$sql->bindParam(10, $num);
		$sql->bindParam(11, $num);
		$sql->bindParam(12, $num);
		$sql->bindParam(13, $num);
		$sql->execute();
	
	} catch (PDOException $e){
		echo $e."<br>";
	}
	$i+=1;
}


?>

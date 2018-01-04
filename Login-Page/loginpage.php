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
	
	$terminal=$_POST['terminalInput'];
	$password=$_POST['passwordInput'];
	$name=$_POST['nameInput'];
	$dept=$_POST['deptInput'];
	$email=$_POST['emailInput'];
	
	try{
	    $conn=setConn();
		$sql_stmt="SELECT COUNT(TERMINAL_NO) AS NUM FROM LOGIN WHERE TERMINAL_NO='$terminal' AND LOGGED_IN=0";

	  	$stmt = $conn->query($sql_stmt);
	 	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		foreach($results as $row){
			if($row['NUM']==0){
				echo "<script>alert('Try a different terminal ID!');</script>";
				echo "<script>window.location.href='loginpage.html';</script>";
			}
			if($row['NUM']==1){
			    $conn=setConn();
				$sql_stmt="UPDATE LOGIN SET NAME=?, DEPT=?, EMAIL=?, LOGGED_IN=1 WHERE TERMINAL_NO=?";
				
				$sql=$conn->prepare($sql_stmt);
				$sql->bindParam(1, $name);
				$sql->bindParam(2, $dept);
				$sql->bindParam(3, $email);
				$sql->bindParam(4, $terminal);
				$sql->execute();

				echo "<script>window.location.href='../Rules-Page/rules-page.html';</script>";
			}
		}
		
	} catch(PDOException $e){
		$e."<br>";
	}
?>
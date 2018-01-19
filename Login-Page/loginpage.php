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
	$reg=$_POST['regInput'];
	$dept=$_POST['deptInput'];
	$email=$_POST['emailInput'];
	
	$_SESSION['terminalNum']=$terminal;
	$_SESSION['username']=$name;
	$_SESSION['email']=$email;
	$_SESSION['regNum']=$reg;
	
	try{
	    $conn=setConn();
		$sql_stmt="SELECT COUNT(TERMINAL_NO) AS NUM, SET_NO FROM LOGIN WHERE TERMINAL_NO='$terminal' AND LOGGED_IN=0";

	  	$stmt = $conn->query($sql_stmt);
	 	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		foreach($results as $row){
			if($row['NUM']==0){
				echo "<script>alert('Try a different terminal ID!');</script>";
				echo "<script>window.location.href='loginpage.html';</script>";
			}
			if($row['NUM']==1){
				
				$_SESSION['setNum']=$row['SET_NO'];
				
			    $conn=setConn();
				$sql_stmt="UPDATE LOGIN SET NAME=?, REG_NO=?, DEPT=?, EMAIL=?, LOGGED_IN=1 WHERE TERMINAL_NO=?";
				
				$sql=$conn->prepare($sql_stmt);
				$sql->bindParam(1, $_SESSION['username']);
				$sql->bindParam(2, $reg);
				$sql->bindParam(3, $dept);
				$sql->bindParam(4, $_SESSION['email']);
				$sql->bindParam(5, $_SESSION['terminalNum']);
				$sql->execute();

				echo "<script>window.location.href='../Rules-Page/rules-page.html';</script>";
			}
		}
		
	} catch(PDOException $e){
		$e."<br>";
	}
?>
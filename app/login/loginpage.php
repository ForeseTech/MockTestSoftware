<?php
	/*****************/
	/* LOGINPAGE.PHP */
	/*****************/

	/* This page takes care of the logging in of the user and upadting the LOGIN table. */

	/* We start the session and include the necessary libraries. */
	session_start();
	require '../../src/sql-connections.php';
	require '../../src/sql-functions.php';
	require '../../src/utilities.php';

	/* We get the necessary details using POST. */
	$terminal=$_POST['terminalInput'];
	$password=$_POST['passwordInput'];
	$name=$_POST['nameInput'];
	$reg=$_POST['regInput'];
	$dept=$_POST['deptInput'];
	$email=$_POST['emailInput'];

	/* We set some session variables. */
	$_SESSION['terminalNum']=$terminal;
	$_SESSION['username']=$name;
	$_SESSION['email']=$email;
	$_SESSION['regNum']=$reg;
	
	try{
	    	$conn=getConnection();
		$sql_stmt="SELECT COUNT(TERMINAL_NO) AS NUM, SET_NO FROM LOGIN WHERE TERMINAL_NO='$terminal' AND LOGGED_IN=0";

		$results = executeQuery($conn, $sql_stmt);

		foreach($results as $row){
			if($row['NUM']==0){
				redirectToLogin(1);
			}
			if($row['NUM']==1){
				
				$_SESSION['setNum']=$row['SET_NO'];
				$sql_stmt="UPDATE LOGIN SET NAME=?, REG_NO=?, DEPT=?, EMAIL=?, LOGGED_IN=1 WHERE TERMINAL_NO=?";
				
				$sql=$conn->prepare($sql_stmt);
				$sql->bindParam(1, $_SESSION['username']);
				$sql->bindParam(2, $reg);
				$sql->bindParam(3, $dept);
				$sql->bindParam(4, $_SESSION['email']);
				$sql->bindParam(5, $_SESSION['terminalNum']);
				$sql->execute();

				redirect("../rules/index.html");
			}
		}
		
	} catch(PDOException $e){
		$e."<br>";
	}

?>

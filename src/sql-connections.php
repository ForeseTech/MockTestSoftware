<?php

/***********************/
/* SQL-CONNECTIONS.PHP */
/***********************/

require "sql-variables.php";

/* This function inits a connection variable and returns it. */
function getConnection(){
	$server = "localhost";
	$username = getDBUsername();
	$password = getDBPassword();
	$database = getDBName();

	$connection=new PDO("mysql:host=$server;dbname=$database", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $connection;
}

?>

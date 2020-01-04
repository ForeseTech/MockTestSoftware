<?php

/************************/
/** SQL-FUNCTIONS.PHP  **/
/************************/

/* Creates functions to shorten code, increase readability in libraries. */
function executeQuery($connection, $sqlstmt) {
	$sql = $connection->query($sqlstmt); //Executes query.
	$results = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetches associative array.	
	return $results;
}

?>

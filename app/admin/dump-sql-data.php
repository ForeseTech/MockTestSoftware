<?php

require("../../src/sql-variables.php");

$username = getDBUsername();
$password = getDBPassword();
$db = getDBName();

shell_exec("mysqldump -u $username --password=$password $db > ../../database/MOCKS20-data.sql");

header("Location: index.html", true, 303);
die();

?>

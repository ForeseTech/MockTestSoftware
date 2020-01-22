<?php

require("../../src/sql-connections.php");
require("../../src/sql-functions.php");
require("../../src/sanitize-database.php");

sanitizeScoresInDatabase();

header("Location: ./", true, 303);
die();

?>

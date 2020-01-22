<?php

require("../../src/sql-connections.php");
require("../../src/sql-functions.php");
require("../../src/csv-generation.php");

generateCSV();

header("Location: index.html", true, 303);
die();

?>

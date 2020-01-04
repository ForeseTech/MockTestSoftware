<?php

/******************/
/* ECHOSETNUM.PHP */
/******************/

/* This PHP file outputs the set number of the current user. */

	session_start();
	echo $_SESSION['setNum'];
?>

<?php

/*****************/
/* UTILITIES.PHP */
/*****************/

function redirect($pageToRedirect) {
	header("Location: $pageToRedirect", true, 303);
	die();
}

function redirectToLogin($msg) {
	redirect("../login/index.php?msg=$msg");
}

function isNotLoggedIn() {
	if(!isset($_SESSION["terminalNum"])) {
		return true;
	}
	
	return false;
}

?>

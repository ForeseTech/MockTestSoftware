<?php

/*****************/
/* UTILITIES.PHP */
/*****************/

function redirect($pageToRedirect) {
	header('Location: $pageToRedirect', true, 303);
	die();
}

function redirectToLogin() {
	redirect("../login/index.html");
}

function isNotLoggedIn() {
	if(!isset($_SESSION["terminalNum"])) {
		return true;
	}
	
	return false;
}

?>

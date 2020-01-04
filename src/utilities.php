<?php

/*****************/
/* UTILITIES.PHP */
/*****************/

function redirect($pageToRedirect) {
	header('Location: $pageToRedirect', true, 303);
	die();
}

?>

<?php
	include_once 'Router.php';
	include_once 'index.php';
	session_destroy();
	return home();
?>
<?php
include_once 'Router.php';


Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);


//smarty
?>
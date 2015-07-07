<?php
include_once 'Router.php';

function home(){
  
$smarty = getSmarty();


return $smarty->fetch("home.tpl");

}

Router::get('^\/$', 'home');
Router::get('^\/home\/', 'home');
?>
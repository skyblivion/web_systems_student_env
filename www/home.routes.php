<?php
include_once 'Router.php';

function home(){
  
$smarty = getSmarty();


return $smarty->fetch("home.routes.tpl");

}

Router::get('^\/$', 'home');
Router::get('^\/home\/', 'home');
?>
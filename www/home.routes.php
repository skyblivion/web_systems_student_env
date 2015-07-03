<?php
include_once 'Router.php';

function home(){
  echo "home";
}

Router::get('^\/$', 'home');
Router::get('^\/home\/', 'home');
?>
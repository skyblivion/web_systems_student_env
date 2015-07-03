<?php
include_once 'Router.php';
function user_id(){
 echo "abvg1";
}
function user_add(){
 echo "abvgd";
}

Router::get('^\/user\/(\d+)$','user_id');
Router::get('^\/user\/','user_add');
?>
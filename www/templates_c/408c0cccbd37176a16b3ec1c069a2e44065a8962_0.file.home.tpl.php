<?php /* Smarty version 3.1.27, created on 2015-07-07 09:03:58
         compiled from "/var/www/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1940677090559b95fe10b6b1_56513605%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '408c0cccbd37176a16b3ec1c069a2e44065a8962' => 
    array (
      0 => '/var/www/home.tpl',
      1 => 1436259833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940677090559b95fe10b6b1_56513605',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559b95fe179469_65126790',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559b95fe179469_65126790')) {
function content_559b95fe179469_65126790 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1940677090559b95fe10b6b1_56513605';
?>
<P>Главная страница</P>
<form method=post action="/"> 
<a href="http://webdb.dev/reg/">Registration</a><br>
<a href="http://webdb.dev/login/">Login</a><br>
<input type="submit" value="logout">
</form><?php }
}
?>
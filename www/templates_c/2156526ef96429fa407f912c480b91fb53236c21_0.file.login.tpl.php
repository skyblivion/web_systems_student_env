<?php /* Smarty version 3.1.27, created on 2015-07-07 08:47:02
         compiled from "/var/www/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1620724563559b920642aa26_34509408%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2156526ef96429fa407f912c480b91fb53236c21' => 
    array (
      0 => '/var/www/login.tpl',
      1 => 1436258813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1620724563559b920642aa26_34509408',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559b9206494e02_06698684',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559b9206494e02_06698684')) {
function content_559b9206494e02_06698684 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1620724563559b920642aa26_34509408';
?>
<p>Логин</p> 
<form method=post action="/login"> 
        <div>E-mail:</div> 
        <div>
        	<input type=text name="email">
        </div> 
        <div>Пароль:</div> 
        <div>
        	<input type=password name="password"> 
        </div> 
        <div>
        	<input type=submit value='Войти'>
        </div> 
 </form> <?php }
}
?>
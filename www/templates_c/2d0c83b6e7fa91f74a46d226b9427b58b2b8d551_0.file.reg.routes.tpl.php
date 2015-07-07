<?php /* Smarty version 3.1.27, created on 2015-07-07 04:32:54
         compiled from "/var/www/reg.routes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:239536234559b5676de3351_33705939%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d0c83b6e7fa91f74a46d226b9427b58b2b8d551' => 
    array (
      0 => '/var/www/reg.routes.tpl',
      1 => 1436243516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239536234559b5676de3351_33705939',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559b5676e85452_48095114',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559b5676e85452_48095114')) {
function content_559b5676e85452_48095114 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '239536234559b5676de3351_33705939';
?>
<p>Регистация</p> 
<form method=post action="/"> 
        <div>E-mail:</div> 
        <div>
        	<input type=text name="email">
        </div> 
        <div>Пароль:</div> 
        <div>
        	<input type=password name="password"> 
        </div> 
        <div>Пароль:</div> 
        <div>
        	<input type=password name="password_again"> 
        </div> 
        <div>
        	<input type=submit value='Зарегистрироваться'>
        </div> 

      </form> 
<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2015-07-07 09:28:26
         compiled from "/var/www/reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:483814867559b9bba1887f0_23017656%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b5647ba2688543736b6fefad6a95818a4e1c98a' => 
    array (
      0 => '/var/www/reg.tpl',
      1 => 1436261303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '483814867559b9bba1887f0_23017656',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559b9bba2100e3_74377344',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559b9bba2100e3_74377344')) {
function content_559b9bba2100e3_74377344 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '483814867559b9bba1887f0_23017656';
?>
<p>Регистация</p> 
<form method=post action="/reg/"> 
        <div>Name:</div> 
        <div>
            <input type=text name="name">
        </div> 
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
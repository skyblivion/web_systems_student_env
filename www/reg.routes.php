<?php
include_once 'Router.php';

function reg(){
  if(empty($_POST)) 
  {	return ;}

  if(empty($_POST['password'])) exit('Поле "Имя" не заполнено'); 
  if(empty($_POST['password_agein'])) exit('Одно из полей "Пароль" не заполнено'); 
  if(!empty($_POST['email'])) 
  { 
    if(!preg_match("|^[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email'])) 
    { 
      exit('Поле "E-mail" должно соответствовать формату somebody@somewhere.ru'); 
    } 
  } 
}
function get_reg(){
	$smarty = getSmarty();


return $smarty->fetch("reg.routes.tpl");
}
Router::post('^\/login/','login');
Router::post('^\/pass/','pass');
Router::post('^\/email/','email');

Router::get('^\/reg\/','get_reg');

?>
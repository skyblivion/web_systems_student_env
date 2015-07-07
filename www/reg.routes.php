<?php
include_once 'Router.php';

function reg(){
  echo '1111';
  //var_dump($_POST);
  if(empty($_POST)) 
  {	
    return home();
  }
//var_dump($_POST);
  if(empty($_POST['password'])) 
    exit('Поле "Имя" не заполнено'); 
  if(empty($_POST['password_again'])) 
    exit('Одно из полей "Пароль" не заполнено'); 
//var_dump($_POST);
  if(!empty($_POST['email'])) 
  { 
    if(!preg_match("|^[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email'])) 
    { 
      exit('Поле "E-mail" должно соответствовать формату somebody@somewhere.ru'); 
    }
  }

  if($_POST['password'] == $_POST['password_again']){
    $information = serialize($_POST);
    
    file_put_contents("users/".$_POST['name'].".txt", $information ,FILE_APPEND | LOCK_EX );
    return home();
  }
  else
    {
      return get_reg();
    } 

}
function get_reg(){
	$smarty = getSmarty();


return $smarty->fetch("reg.tpl");
}

Router::post('^\/reg\/','reg');

Router::get('^\/reg\/','get_reg');

?>
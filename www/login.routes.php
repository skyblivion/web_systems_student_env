<?php
	include_once 'Router.php';
	include_once 'index.php';

	function get_login(){
		$login = getSmarty();
		return $login->fetch('login.tpl');
	}

	function login(){
		if (file_exists ("users/".$_POST['email'].".txt")){
			$info = file_get_contents("www/users/".$_POST['email'].".txt");
			$_CURRENT_USER = unserialize($info);
			if($_CURRENT_USER['password'] == $_POST['password']){
				$_SESSION['email'] = $_POST['email'];
				return home();
			}
			else {
				return login();
			}
		}
		else{
				return login();
			}  
	}

	Router::get('^\/login', 'get_login');
	Router::post('^\/login', 'login');
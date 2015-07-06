<?php
include_once 'Router.php';

require_once 'Smarty/libs/Smarty.class.php';


function getSmarty(){
	$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir  = 'templates_c'; 
return $smarty; 
}
$smarty=getSmarty();
$content= Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
$smarty->assign('content', $content); 
$smarty->display('s.routes.tpl');





//smarty
?> 
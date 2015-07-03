<?php
include_once 'home.routes.php';
include_once 'user.routes.php';

class Router {

  private static $routes = array('GET' => array(),'POST'=>array());

  private function __constructor() {}

  public static function get($pattern, $callback) {
    self::set('GET', $pattern, $callback);
  }

  public static function post($pattern, $callback) {
    self::set('POST', $pattern, $callback);
  }

  private static function set($type, $pattern, $callback){
    if (!function_exists($callback)) { 
      new Exception("Method $callback not exists"); 
    }
    self::$routes[$type][$pattern] = $callback;
   }


  public static function process($method, $uri) {
    if (!in_array($method, array('GET', 'POST'))) {
      new Exception("Request method should be GET or POST"); 
    }

    // Выполнение роутинга
    // Используем роуты $routes['GET'] или $routes['POST']  в зависимости от метода HTTP.
    $active_routes = self::$routes[$method];
   // var_dump(self::$routes);
    // Для всех роутов 
    foreach ($active_routes as $pattern => $callback) {
      // Если REQUEST_URI соответствует шаблону - вызываем функцию
      if (preg_match_all("/$pattern/", $uri, $matches)) {
        // вызываем callback
        //var_dump($matches);
        call_user_func_array($callback,$matches);
        // выходим из цикла
        break;
      }
      $matches = array();
    }
  }

  private static function user(){

  }
  private static function account_list() {

  }
  private static function account_view() {

  }
  /*private static function account_sum(){

  }
  private static function account_divide(){

  }
  private static function account_subtract(){

  }
  private static function account_multiply(){

  }*/
  private static function pocket_list(){

  }
  private static function pocket_view(){

  }
  /*private static function pocket_sum(){

  }
  private static function pocket_divide(){

  }
  private static function pocket_subtract(){

  }
  private static function pocket_multiply(){
    
  }*/

}
?>
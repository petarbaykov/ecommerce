<?php

/* 
 * Front Controller Page. All requests will be directed to this file
 */


$url = explode("/",$_SERVER['REQUEST_URI']);

array_shift($url);
array_shift($url);

$className = array_shift($url);
$methodName = array_shift($url);

if(empty($methodName)) {
    $methodName = "index";
}

if(empty($className)) {
    $className = "home";
}

spl_autoload_register(function($class) {

    $splitted = explode("\\", $class);
    array_shift($splitted);
    $fullClass = implode(DIRECTORY_SEPARATOR, $splitted);
    include $fullClass . '.php';
});


$controllerName = "\\Ecommerce\\Controllers\\" . ucfirst($className) . "Controller";

$controller = new $controllerName();

call_user_func_array(array($controllerName,$methodName), $url);
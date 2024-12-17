<?php

session_start();
if(!isset($_SESSION["admin"])&&!isset($_SESSION['user'])){
    $controllerName = ucfirst(isset($_GET['controller']) ? $_GET['controller']: 'Auth') . 'Controller';
    $actionName = $_GET['action'] ?? 'login';
    require_once("./controllers/$controllerName.php");
    $newsController = new $controllerName();
    $newsController->$actionName();
}
else{
    if(!isset($_SESSION['admin']) || isset($_SESSION['user']))

    require_once("config/config.php");
    $controllerName = ucfirst(isset($_GET['controller']) ? $_GET['controller']: 'News') . 'Controller';
    $actionName = $_GET['action'] ?? 'index';
    
    require_once("./controllers/$controllerName.php");
     
    $newsController = new $controllerName();
    $newsController->$actionName();
    
}






<?php
require_once("config/config.php");
$controllerName = ucfirst(isset($_GET['controller']) ? $_GET['controller']: 'News') . 'Controller';
$actionName = $_GET['action'] ?? 'index';

require_once("./controllers/$controllerName.php");

$newsController = new $controllerName();
$newsController->$actionName();







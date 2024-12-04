<?php
require_once("config/config.php");


require_once("./controllers/NewsController.php");

$newsController = new NewsController();
$newsController->detail();







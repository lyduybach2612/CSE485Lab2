<?php

require_once("../CSE485Lab2/config/config.php");
require_once APP_ROOT."/controllers/HomeController.php";

$HomeController = new HomeController();
$HomeController->index();
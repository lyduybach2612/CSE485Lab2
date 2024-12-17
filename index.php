<?php
    require_once "config/config.php";
    require_once APP_ROOT . "/controllers/AuthController.php";
    $authController = new AuthController();
    $authController->register();  
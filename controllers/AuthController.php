<?php
    require_once APP_ROOT . '/services/UserService.php';
    class AuthController{
        // public function login(String $username, String $password){
        //     $userService = new UserService();
        //     $user = $userService->getUserByUserName($username);
        //     if(!empty()){
                
        //     }
        // }

        public function register($user){
            include APP_ROOT . "/view/auth/register.php";
        }
    }
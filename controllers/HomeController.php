<?php
require_once APP_ROOT."/services/HomeService.php";

class HomeController{
    public function index(){
        $HomeService = new HomeService();
        $categories = $HomeService->getAllCatagory();

        include APP_ROOT."/views/home/index.php";
    }
}
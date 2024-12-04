<?php
    require_once("services/NewsService.php");
    class NewsController{
        public function detail(){
            $newsService = new NewsService();
            $newsList = $newsService->getAllNews();
            include ("./view/news/detail.php");
        }
    }

?>
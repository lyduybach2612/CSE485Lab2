<?php
    require_once APP_ROOT.'/models/Category.php';
    class HomeService{
        public function getAllCatagory(){
            try{
                $con = new PDO('mysql:host=localhost;dbname=news;port=3306','root','');
                
                $sql = "SELECT * FROM categories";
                $stmt = $con->query($sql);

                $categories = [];
                while($row = $stmt->fetch()){
                    $category = new Category($row['id'],$row['name']);
                    $categories[] = $category;
                }
                return $categories;

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

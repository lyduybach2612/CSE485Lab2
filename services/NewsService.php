<?php
    require_once(APP_ROOT."/models/News.php");
    require_once(APP_ROOT."/connection/Database.php");
    class NewsService{
        public function getAllNews(){
            try{
                $db = new Database();
                $conn = $db->getConnection();
                $sql = "SELECT * FROM NEWS.NEWS";
                $stmt= $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(Exception $e){
                echo "". $e->getMessage();
            }

            $news = [];
            foreach($result as $row){
                $new = new News ($row['id'],$row['title'],$row['content'],$row['image'],$row['created_at'],$row['category_id']);
                $news[] = $new;
            }
            return $news;
        }
    }

?>
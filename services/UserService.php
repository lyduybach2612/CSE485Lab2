<?php 
    require APP_ROOT . 'models/User.php';
    require APP_ROOT . 'connection/Database.php';
    class UserService{

        public function getUserByUserName($userName){
            $db = new Database();
            $conn = $db->getConnection();
            $sql = 'SELECT * FROM users WHERE username=?';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $userName, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $user = new User(
                $result['id'],
                $result['username'],
                $result['password'],
                $result['role']
            );
            return $user;
        }

        public function saveUser($user){
            $db = new Database();
            $conn = $db->getConnection();
            $sql = "INSERT INTO users(username, password, role) VALUES (?,?,0)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $user->username, PDO::PARAM_STR);
            $stmt->bindParam(2, $user->password, PDO::PARAM_STR);
            $stmt->execute();
        }


    }
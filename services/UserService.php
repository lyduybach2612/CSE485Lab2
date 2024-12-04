<?php
require_once APP_ROOT . '/models/User.php';
require_once APP_ROOT . '/connection/Database.php';
class UserService
{

    public function getUserByUserName($userName)
    {
        $db = new Database();
        $conn = $db->getConnection();
        $sql = 'SELECT * FROM users WHERE username=?';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $userName, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $user = new User(
                $result['username'],
                $result['password'],
            );
            $user->setId($result['id']);
            $user->setRole($result['role']);
            return $user;
        }
        return null;
    }

    public function saveUser(User $user)
    {
        try {
            $db = new Database();
            $conn = $db->getConnection();
            $sql = "INSERT INTO users(username, password, role) VALUES (?,?,0)";
            $stmt = $conn->prepare($sql);
            $username = $user->getUsername();
            $password = $user->getPassword();
            $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindParam(1, $username, PDO::PARAM_STR);
            $stmt->bindParam(2, $passwordHashed, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

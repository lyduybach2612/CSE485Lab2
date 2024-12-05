<?php
    class Database{
        private $host;
        private $dbname;
        private $username;
        private $password;
        private $port;
        private $conn;
        public function __construct(){
            $this->host = 'localhost';
            $this->dbname = 'news';
            $this->username = 'root';
            $this->password = '';
            $this->port = 3306;
            try{
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;port=$this->port", $this->username, $this->password);
            }
            catch(PDOException $e){
                $this->conn = null;
            }
        }
        public function getConnection(){
            return $this->conn;
        }
    }
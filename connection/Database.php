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
            $this->password = '123';
            $this->port ;
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            
        }
        public function getConnection(){
            return $this->conn;
        }
    }
?>
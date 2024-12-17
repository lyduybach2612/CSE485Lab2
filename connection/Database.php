
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
            $this->port = 3306;
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;port=$this->port", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function getConnection(){
            return $this->conn;
        }
    }


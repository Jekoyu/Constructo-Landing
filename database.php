<?php
require_once 'env_loader.php';

class Database {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $conn;

    public function __construct() {
        $this->host     = getenv('DB_HOST');
        $this->dbname   = getenv('DB_NAME');
        $this->username = getenv('DB_USER');
        $this->password = getenv('DB_PASS');
    }

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname;charset=utf8",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

<?php
class database {
    private $servername = "localhost";
    private $dbname = "dlmyekfa_bookstore";
    private $username = "dlmyekfa_bookstore";
    private $password = "bL.s*#p-qL+s";
    public $conn = null;
    
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->conn->query("SET NAMES 'utf8mb4'");
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

$conn = new database();
$pdo = $conn->conn;
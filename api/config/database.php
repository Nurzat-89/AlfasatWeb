<?php
class Database{
 
    // specify your own database credentials
    private $host = "srv-db-plesk06.ps.kz:3306";
    private $db_name = "alfasatk_test";
    private $username = "alfas_test";
    private $password = "Asd1234567890_";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}

?>
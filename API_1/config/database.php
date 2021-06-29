<?php
   class Database{

    // specifing own database credentials
    private $host = "sql6.freesqldatabase.com";
    private $db_name = "sql6422053";
    private $username = "sql6422053";
    private $password = "7WAkLFF6FN";
    private $conn;

    // get the database connection
    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" .$this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
           
        }catch(PDOException $exception){
            echo "Connection error: " . $exception-> getMessage();
        }
        return $this->conn;
    }
   }
?>
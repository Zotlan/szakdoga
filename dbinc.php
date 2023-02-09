<?php
Class DataBase{
    private $servername = "localhost";
    private $username = "c31bzolidbu";
    private $password = "imkPF@58";
    private $dbname = "c31bzolidb";

    private $conn;

    function __construct(){
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->conn = $conn;
    }

    public function dbselect($sql){

        if($result = $this->conn->query($sql)){
        if ($result->num_rows > 0){
            return $result;
        }
        else{
            return NULL;
        }
        }
        elseif($this->conn->error){
            die("SQL error: ". $this->conn->error);
        }
    }

    public function dbinsert($sql){
        if ($this->conn->query($sql) === TRUE) {} 
        else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
            
    }
}
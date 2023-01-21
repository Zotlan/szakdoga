<?php

require_once 'dbinc.php';

class User{

    private $user_id;
    private $user_type;

    private $db;

    function __construct($db){
        $this->db=$db;
    }

    public function checkLogin($user_name, $password){
        $sql = "SELECT * FROM user WHERE username = '".$_POST['user_name']."'";
        // van ilyen felhasznalo?
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){

            
                //checks if the password is correct... it hopefully works
                if($row['password'] == md5($password)){
                    $eredmeny = 2 ;//success
                    $_SESSION["user_name"] = $row['username'];
                    $_SESSION["id"] = $row['user_id'];
                }else{
                    $eredmeny = 1 ;//incorrect password
                }

            }

            }else{
                $eredmeny = 0; //incorrect username
            }
            return $eredmeny;


    }
    
}






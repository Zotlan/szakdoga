<?php

require_once 'dbinc.php';

class User{

    private $user_ID;
    private $user_Email;
    private $user_Name;
    private $user_Password;
    private $user_Type;
    private $db;

    function __construct($db){
        $this->db=$db;
    }

    public function checkLogin($username, $password){
        $sql = "SELECT * FROM user WHERE userName = '".$_POST['username']."'";
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){
                //checks if there is a user with the inputted username
                if($row['userName'] == $username){
                    //echo $username;
                    //checks if the password is correct, it works now
                    if($row['userPassword'] == md5($password)){
                        $loginResult = 2 ;//successful login
                        $_SESSION["username"] = $row['userName'];
                        $_SESSION["id"] = $row['userID'];
                    }
                    else{
                        $loginResult = 1 ;//incorrect password
                    }
                }
                else{
                    echo "Wrong username.";
                }
            }
        }
        else{
            $loginResult = 0; //incorrect username
        }
        return $loginResult;
    }

    //this function checks if the email address is valid so that it may be inserted into the database.
    //Doesn't work atm.
    public function checkEmail($Email){

        //$email = $_POST["email"];
        $emailValid = "";

        //checks if the email address is already registered
        $sql="SELECT * FROM user WHERE userEmail = '".$_POST['email']."'";
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){
                if($row['userEmail'] == $Email){
                    echo 'This email address is already in use.';
                }
            }
        }
        elseif(strpos($Email, "@") && strpos($Email, ".")){
            $emailValid = 1;
            //echo "email: ".$_POST['email']."<br>";
            //echo "emailValid: ".$emailValid."<br>";
        }
        else{
            echo "The email address isn't real";
        }
        return $emailValid;
    }

    //this function checks if the username is valid so that it may be inserted into the database.
    //Doesn't work atm.
    public function checkUserName($Username){

        //$Username = $_POST["username"];

        $userNameNotUsed = "";

        $sql = "SELECT * FROM user WHERE userName = '".$_POST['username']."'";
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){
                if($row['userName'] == $Username){
                    echo "Username already in use";
                }
            }
        }
        else{
            $userNameNotUsed = 1;
        }
        return $userNameNotUsed;
    }
    
    //this function checks if the password is valid so that it may be inserted into the database.
    //This is Currently working.
    public function checkPassword($Password){

        //$Password = $_POST["password"];
        $passwordValid = "";

        if(strlen($Password) >= 8){
                if(preg_match('~[0-9]+~', $Password)){
                    if(preg_match('/[A-Z]/', $Password)){
                        $passwordValid = 1;
                        //echo "password: ".$_POST['password']."<br>";
                        //echo "passwordValid: ".$passwordValid."<br>";
                    }
                    else{
                        echo "The password must contain at least one uppercase letter";
                    }
                }
                else{
                    echo "The password must contain at least one number";

                }
        }
        else{
            echo "The password must be at least 8 characters long";
        }
        return $passwordValid;
    }

    //this function inserts the userdata
    public function registerStudent($Email, $Name, $Password){
        $sql = "INSERT INTO user (userID, userEmail, userName, userPassword, userType) VALUES (NULL,'".md5($Email)."','$Name','".md5($Password)."',1)";
        $result = $this->db->dbinsert($sql);
    }
}
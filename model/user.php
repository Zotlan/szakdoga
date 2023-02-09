<?php

require_once 'dbinc.php';

class User{

    private $user_ID;
    private $user_Email;
    private $user_Name;
    private $user_Password;
    private $user_Type;
    private $validLength;
    private $containsNumber;
    private $containsUpper;
    private $containsLetter;
    private $db;

    function __construct($db){
        $this->db=$db;
    }

    public function checkLogin($username, $password){
        $sql = "SELECT * FROM user WHERE username = '".$_POST['username']."'";
        //checks if there is a user with the inputted username
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){

            
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

        }
        else{
            $loginResult = 0; //incorrect username
        }
        return $loginResult;
    }

    //this function checks if the email address is valid so that it may be inserted into the database.
    public function checkEmail($Email){

        $usageEmail = "";
        $containsAt = "";
        $containsDot = "";

        //checks if the email address is already registered
        $sql="SELECT * FROM user WHERE 1";
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){
                if($row['userEmail'] == $Email){
                    $usageEmail = 0;
                }
                else{
                    $usageEmail = 1;
                }
            }
        }//Checks if there is an "@" in the email address.
        if(strpos($Email, "@")){
            $containsAt = 1;
        }
        //Checks if there is a "." in the email address.
        if(strpos($Email, ".")){
            $containsDot = 1;
        }

        /*
        There are 3 cases for email validity
        1. The email address is already in use.
        2. The email address isn't real.
        3. The email address is valid.
        */

        //case 1
        if($usageEmail != 1){
            $emailValid = 0;
        }

        //case 2
        if($containsAt == 0 || $containsDot == 0){
            $emailValid = 1;
        }

        //case 3
        if($usageEmail == 1 && $containsAt == 1 && $containsDot == 1){
            $emailValid = 2;
        }
        return $emailValid;
    }

    //this function checks if the username is valid so that it may be inserted into the database.
    public function checkNick($Username){
        $nickExists = "";

        $sql="SELECT * FROM user WHERE 1";
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){
                if($row['userName'] == $Username){
                    $nickExists = 0;
                }
                else{
                    $nickExists = 1;
                }
            }
        }
        return $nickExists;
    }
    
    //this function checks if the password is valid so that it may be inserted into the database.
    public function checkPassword($Password){

        if(strlen($Password) >= 8){
            $this->validLength = 1;
            for ($i = 0; $i <= strlen($Password)-1; $i++) {
                if(is_numeric($Password[$i]))  {
                    $this->containsNumber = 1;
                    break;
                }
            }
            if(preg_match('/[A-Z]/', $Password)){
                    $this->containsUpper = 1;
            }
        }
        /*
        There are 5 cases for password validity
        1. The password isn't long enough.
        2. The password doesn't contain at least one number.
        3. The password doesn't contain at least one uppercase letter.
        4. The password doesn't contain any letters.
        5. The password is valid.
        */

        //case 1
        if($this->validLength != 1){
            $passwordValid = 0;
        }

        //case 2
        if($this->containsNumber != 1){
            $passwordValid = 1;
        }

        //case 3
        if($this->containsUpper != 1){
            $passwordValid = 2;
        }

        //case 4
        if($this->validLength == 1 && $this->containsNumber == 1 && $this->containsUpper == 1 && $this->containsLetter){
            $passwordValid = 3;
        }
        return $passwordValid;
    }

    //this function inserts the userdata
    public function registerStudent($user_Email, $user_Name, $user_Password){
        $sql = "INSERT INTO user (userID, userEmail, userName, userPassword, userType) VALUES (NULL,'$user_Email','$user_Name','".md5($user_Password)."',1)";
        $result = $this->db->dbinsert($sql);
    }
    
    
}
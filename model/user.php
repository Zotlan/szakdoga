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
        $sql = "SELECT * FROM user WHERE username = '".$_POST['username']."'";
        //checks if there is a user with the inputted username
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){

            
                //checks if the password is correct, it works now
                if($row['userPassword'] == md5($password)){
                    $loginResult = 2 ;//successful login
                    $_SESSION["username"] = $row['userName'];
                    $_SESSION["id"] = $row['userID'];
                }else{
                    $loginResult = 1 ;//incorrect password
                }

            }

            }else{
                $loginResult = 0; //incorrect username
            }
            return $loginResult;
    }

    //this is for the student registration
    //checks if the email address, username and password all meet the predetermined requirements and that they aren't used already
    public function checkRegistryS($user_Email, $user_Name, $user_Password){
        //it doesn't check anything at the moment...
        $sql="SELECT * FROM user WHERE 1";
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){
                if($row['userEmail'] == $user_Name){
                    $registryCheck = 2;
                }
                elseif($row['userName'] == $user_Name){
                    $registryCheck = 2;
                }
                elseif($row['userName'] == $user_Name){
                    $registryCheck = 3;
                }
                else{
                    $registryCheck=4;
                }
            }
        }
        return $registryCheck;
        }
        
    

    //this function inserts the userdata
    public function registerStudent($user_Email, $user_Name, $user_Password){
        $sql = "INSERT INTO user (userID, userEmail, userName, userPassword, userType) VALUES (NULL,'$user_Email','$user_Name','".md5($user_Password)."',1)";
        $result = $this->db->dbinsert($sql);
    }
    
    //doesn't work either
    /*public function registerTeacher(){
        $sql = "INSERT INTO user(id, email, name_user, password, user_type) VALUES (,,,,2)";

            if ($conn->query($sql) === TRUE) {
                echo "Registration was successfully";
            }
        
    }*/
}





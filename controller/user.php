<?php

    require 'model/user.php';
    $user= new User($db);

    $loginResult = "";

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $loginReaction = array(
        "There is no user with such username",
        "Login Failed: Wrong Password",
        "Login Successful",
    );

    switch ($action){
        case 'logout':
            session_unset();
            $loginResult = "Logged out Succesful";
        break;

        case 'login':
            if(isset($_POST['username']) && isset($_POST['password'])){

            $login = $user->checkLogin($_POST['username'], $_POST['password']);

            $loginResult = $loginReaction[$login];
            }
        break;

        case 'register_student':
            $sql = "INSERT INTO user(id, email, name_user, password, user_type) 
                    VALUES (,,,,1)";

            if ($conn->query($sql) === TRUE) {
                echo "Registration was successfully";
            }
            
        break;

        case 'register_teacher':
            $sql = "INSERT INTO user(id, email, name_user, password, user_type) 
                    VALUES (,,,,2)";

            if ($conn->query($sql) === TRUE) {
                echo "Registration was successfully";
            }
            
        break;
    }

    echo $loginResult . "<br>";
    //print_r($_SESSION);


require 'view/login.php';
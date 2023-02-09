<?php

    require 'model/user.php';
    $user= new User($db);

    $email = "";

    $nickname = "";

    $password = "";

    $registry = "";

    $checkResult = "";

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $emailReaction = array(
        "This email address is already in use.",//0
        "Not a real email address.",//1

    );
    $passwordReaction = array(
        "The password must be at least 8 characters long",//0
        "The password must contain at least one number",//1
        "The password must contain at least one uppercase letter",//2
    );

    switch ($action){
        case 'student':
            if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){

                $email = $user->checkEmail($_POST['email']);//valid=2

                $nickname = $user->checkNick($_POST['username']);//valid=1

                $password = $user->checkPassword($_POST['password']);//valid=4

                if($email != 2){
                    echo $emailReaction[$email] . "<br>";
                }

                if($nickname != 1){
                    echo "The Username is already in use" . "<br>";
                }

                if($password != 3){
                    echo $passwordReaction[$password] . "<br>";
                }

                if($email == 2 && $nickname == 1 && $password == 3){
                    $registry = 1;
                }
            }

            if($registry == 1){
                $user->registerStudent($_POST['email'], $_POST['username'], $_POST['password']);
                echo "Registration Successful." . "<br>";
            }
            
        break;
    }

    require "view/registry.php";
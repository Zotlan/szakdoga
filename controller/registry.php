<?php

    require 'model/user.php';
    $user= new User($db);

    $email = "";

    $nickname = "";

    $password = "";

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    switch ($action){
        case 'student':
            if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){

                $email = $user->checkEmail($_POST["email"]);//valid=1

                $nickname = $user->checkUserName($_POST["username"]);//valid=1

                $password = $user->checkPassword($_POST["password"]);//valid=1
            }
        break;
    }
    if($email == 1 && $nickname == 1 && $password == 1){
        $user->registerStudent($_POST['email'], $_POST['username'], $_POST['password']);
        echo "Registration Successful." . "<br>";
    }
    else{
        //echo "email: ".$email."<br>";
        //echo "nickname: ".$nickname."<br>";
        //echo "password: ".$password."<br>";
    }



    require "view/registry.php";
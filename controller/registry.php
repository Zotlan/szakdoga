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

                $email = $user->checkEmail(htmlspecialchars($_POST["email"]));//valid=1

                $nickname = $user->checkUserName(htmlspecialchars($_POST["username"]));//valid=1

                $password = $user->checkPassword(htmlspecialchars($_POST["password"]));//valid=1
            }
        break;
    }
    if($email == 1 && $nickname == 1 && $password == 1){
        $user->registerStudent($_POST['email'], $_POST['username'], $_POST['password']);
        $user->checkLogin($_POST['username'], $_POST['password']);
        header("Location: index.php?page=forum");
        exit();
    }



    require "view/registry.php";
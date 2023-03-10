<?php

    require 'model/user.php';
    $user= new User($db);

    $loginResult = "";

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $loginReaction = array(
        "Login Failed: Wrong Username",
        "Login Failed: Wrong Password",
        "Login Successful",
    );

    switch ($action){
        case 'logout':
            session_destroy();
            $loginResult = "Logged out Successful";
        break;

        case 'login':
            if(isset($_POST['username']) && isset($_POST['password'])){

            $login = $user->checkLogin(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));

            $loginResult = $loginReaction[$login];

            echo $loginResult . "<br>";

            if($login == 2) {
                header("Location: index.php?page=forum");
                exit();
            }
            }
        break;
    }
    require 'view/login.php';
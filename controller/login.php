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
            session_unset();
            $loginResult = "Logged out Successful";
        break;

        case 'login':
            if(isset($_POST['username']) && isset($_POST['password'])){

            $login = $user->checkLogin($_POST['username'], $_POST['password']);

            $loginResult = $loginReaction[$login];
            }
        break;
    }
    echo $loginResult . "<br>";
    //print_r($_SESSION);


    require 'view/login.php';
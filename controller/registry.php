<?php

    require 'model/user.php';
    $user= new User($db);

    $registry = "";

    $checkResult = "";

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $registryReaction = array(
        "Registry Failed: Not a Real Email Address.",//0
        "Registry Failed: This Email is Already in Use.",//1
        "Registry Failed: The Username is Already in Use.",//2
        "Registration Successful.",//3
    );

    switch ($action){
        case 'student':
            if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){


            $nickname = $user->checkNick($_POST['username']);

            $password = $user->checkPassword($_POST['password']);

            $registry = $user->checkRegistryS($_POST['email'], $_POST['username']);

            $checkResult = $registryReaction[$registry];
            }
        break;
        case 'teacher':

        break;
    }
    if($registry == 4){
        $user->registerStudent($_POST['email'], $_POST['username'], $_POST['password']);
    }
    echo $checkResult . "<br>";

    require "view/registry.php";
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
        "Registry Failed: The Password Must Be At Least 8 Characters Long and Contain At Least a Higher Case Letter and a Number.",//3
        "Registration Successful.",//4
    );

    switch ($action){
        case 'student':
            if(isset($_POST['email'], $_POST['username']) && isset($_POST['password'])){

            $registry = $user->checkRegistryS($_POST['email'], $_POST['username'], $_POST['password']);

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
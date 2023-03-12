<?php

    require 'model/user.php';
    $user = new User($db);

    $username = 0;

    $email = 0;

    $password = 0;

    $updateResponse = "";

    $uploadResponse = "";

    $userID = $_SESSION['id'];
    if (file_exists('assets/profile_pictures/'.$userID.'.jpg')) {
        $userPic = $userID;
    } else {
        $userPic = "default";
    }

    if(isset($_POST["ppUpload"])){
        $uploadResponse = $user->uploadProfilePic();
    }

    if(isset($_POST["changeName"])){
        $username = $user->checkUserName(htmlspecialchars($_POST["username"]));
        if($username == 1){
            $updateResponse = $user->updateUserName(htmlspecialchars($_POST["username"]), $userID);
        }
    }

    if(isset($_POST["changeEmail"])){
        $email = $user->checkEmail(htmlspecialchars($_POST["email"]));
        if($email == 1){
            $updateResponse = $user->updateEmail(htmlspecialchars($_POST["email"]), $userID);
        }
    }

    if(isset($_POST["changePass"])){
        $password = $user->checkPassword(htmlspecialchars($_POST["password"]));
        if($password == 1){
            $updateResponse = $user->updatePassword(htmlspecialchars($_POST["password"]), $userID);

        }
    }


require "view/profile.php";
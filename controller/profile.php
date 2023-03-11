<?php

    require 'model/user.php';
    $user = new User($db);

    $userID = $_SESSION['id'];
    if (file_exists('assets/profile_pictures/'.$userID.'.jpg')) {
        $userPic = $userID;
    } else {
        $userPic = "default";
    }

    if(isset($_POST["ppUpload"])) {
        $user->uploadProfilePic();
    }





require "view/profile.php";
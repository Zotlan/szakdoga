<?php
    
    $action = "";

    $action = $_REQUEST['action'] ?? "";

    

    switch($action){
    case 'upload':
        $target_dir = "uploads/";
        $target_file = $target_dir. $_SESSION['username'].".jpg";
    
        if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["profilePic"]["tmp_name"])). " has been uploaded.<br>";
        } 
        else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    break;
    }












require "view/profile.php";
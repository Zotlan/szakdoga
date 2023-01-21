<?php

    if(isset($_GET['kilepes'])){
        session_unset();
    }

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    switch ($action){
        case 'logout':
            session_unset();
            $eredmeny = "Logged out Succesful";
        break;

        case 'login':
            if(isset($_POST['']) && isset($_POST[''])){

            $login = $szemely->checkLogin($_POST[''], $_POST['']);

            }
        break;

        case 'register_student':
            $sql = "INSERT INTO user(id, email, name_user, password, user_type) 
                    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]',1)";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
        break;

        case 'register_teacher':

            
        break;
    }




require 'view/login.php';
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
            if(isset($_POST['username']) && isset($_POST['password'])){

            $login = $szemely->checkLogin($_POST['username'], $_POST['password']);

            }
        break;

        case 'register_student':
            $sql = "INSERT INTO user(id, email, name_user, password, user_type) 
                    VALUES (,'[value-2]','[value-3]','[value-4]',1)";

            if ($conn->query($sql) === TRUE) {
                echo "Registration was successfully";
            }
            
        break;

        case 'register_teacher':
            $sql = "INSERT INTO user(id, email, name_user, password, user_type) 
                    VALUES (,,,,1)";

            if ($conn->query($sql) === TRUE) {
                echo "Registration was successfully";
            }
            
        break;
    }




require 'view/login.php';
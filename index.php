<?php

    session_start();

    require 'dbinc.php';
    $db = new DataBase();

    
    $page = $_REQUEST['page'] ?? "index";

    $controllerFile = 'controller/'.$page.'.php';

    if(file_exists($controllerFile)){
        require $controllerFile;
    }

?>
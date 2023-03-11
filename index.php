<!DOCTYPE html>
<?php
session_name('zotlan');
    session_start();

    require 'dbinc.php';
    $db = new DataBase();

    $page = $_REQUEST['page'] ?? "index";

    $controllerFile = 'controller/'.$page.'.php';

    if(file_exists($controllerFile)){
        require $controllerFile;
    }

    // Generate a session ID based on the current URL
    //This is from Horvath as he found it, only needed because we all share a server.
    $session_id = md5($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

    $_SESSION['session_id'] = $session_id;
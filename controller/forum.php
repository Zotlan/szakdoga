<?php

    require 'model/forum.php';
    $forum= new Forum($db);

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $numberOfPosts = 0;

    $numberOfPosts = $forum->checkPostNumber();

    $Cats = 0;

    $Cats = $forum->checkCategoryNumber();

    $CatID = $forum->checkCategoryID();

    $postID = $forum->checkPostID();

    if(array_key_exists('sendPost', $_POST)) {
        $selected = $_POST['postCategory'];
        $forum->uploadPost(htmlspecialchars($_POST['postTitle']), $selected, htmlspecialchars($_POST['postContent']));
    }

require "view/forum.php";
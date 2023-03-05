<?php

    require 'model/forum.php';
    $forum= new Forum($db);

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $numberOfPosts = 0;

    $numberOfPosts = $forum->checkPostNumber();

    $Cats = 0;

    $Cats = $forum->checkCategoryNumber();

require "view/forum.php";
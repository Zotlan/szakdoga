<?php

    require 'model/chat.php';
    $chat= new Chatroom($db);

    $rooms = $chat->checkPublicRooms();
















require "view/chat.php";
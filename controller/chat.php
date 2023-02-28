<?php

    require 'model/chat.php';
    $chat= new Chatroom($db);

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $currentRoom = 0;

    $currentRoom = $_REQUEST['currentRoom'] ?? "";

    $rooms = $chat->checkPublicRooms();

    $roomMessages = $chat->checkRoomMessageNumber($currentRoom);

    if(array_key_exists('send_message', $_POST)) {
        $chat->sendMessage($_POST['message_field'], $currentRoom);
    }
    $roomIDs = $chat->checkRoomIDs();

    $messageIDs = $chat->checkMessageIDs($currentRoom);






require "view/chat.php";
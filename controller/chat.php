<?php

    require 'model/chat.php';
    $chat= new Chatroom($db);

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $currentRoom = 0;

    $currentRoom = $_REQUEST['currentRoom'] ?? "";

    $currentUser = 0;

    $currentUser = $_SESSION['id'] ?? "";

    $publicRooms = $chat->checkNumberOfRooms($currentUser);

    $roomMessages = $chat->checkRoomMessageNumber($currentRoom);

    $ownedRoom = $chat->checkOwnership($currentUser);

    if(array_key_exists('send_message', $_POST)) {
        $chat->sendMessage($_POST['message_field'], $currentRoom);
    }

    if(array_key_exists('create', $_POST)) {
        $chat->createRoom($_POST['roomName'], $currentUser);
    }

    if(array_key_exists('invite', $_POST)) {
        $chat->inviteUser($_POST['invited'], $currentRoom);
    }


    $roomIDs = $chat->checkRoomIDs($currentUser);

    $messageIDs = $chat->checkMessageIDs($currentRoom);

require "view/chat.php";
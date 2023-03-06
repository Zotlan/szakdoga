<?php

    require 'model/chat.php';
    $chat= new Chatroom($db);

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $currentRoom = 0;

    $currentRoom = $_REQUEST['currentRoom'] ?? "";

    $currentUser = 0;

    $currentUser = $_SESSION['id'] ?? "";

    $publics = $chat->checkNumberOfPublics();

    $privates = $chat->checkNumberOfPrivates($currentUser);

    $roomMessages = $chat->checkRoomMessageNumber($currentRoom);

    $ownedRoom = $chat->checkOwnership($currentUser);

    if(array_key_exists('send_message', $_POST)) {
        $chat->sendMessage(htmlspecialchars($_POST['message_field']), $currentRoom);
    }

    if(array_key_exists('create', $_POST)) {
        $chat->createRoom(htmlspecialchars($_POST['roomName']), $currentUser);
    }

    if(array_key_exists('invite', $_POST)) {
        $chat->inviteUser(htmlspecialchars($_POST['invited']), $currentRoom);
    }

    $publicIDs = $chat->checkPublicIDs();

    $privateIDs = $chat->checkPrivateIDs($currentUser);

    $messageIDs = $chat->checkMessageIDs($currentRoom);

require "view/chat.php";
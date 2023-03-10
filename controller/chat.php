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
        $inviteValid = $chat->checkMembership($_POST['invited'], $currentRoom);
        if($inviteValid == 1){
            $chat->inviteUser(htmlspecialchars($_POST['invited']), $currentRoom);
        }
        else{
            echo 'This user is already part of the chatroom.';
        }
    }

    $publicIDs = $chat->checkPublicIDs();

    $privateIDs = $chat->checkPrivateIDs($currentUser);

    $messageIDs = $chat->checkMessageIDs($currentRoom);

    echo '
    <script  type="text/javascript">
        setInterval(function(){$("#room_view").load(location.href+" #room_view>*","");}, 2500);
    </script>
    ';
    echo '
    <script  type="text/javascript">
        setInterval(function(){$("#rooms").load(location.href+" #rooms>*","");}, 1000);
    </script>
    ';
    echo '
    <script>
    function openNav() {
      document.getElementById("mySidepanel").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidepanel").style.width = "0";
    }
    </script>
    ';

require "view/chat.php";
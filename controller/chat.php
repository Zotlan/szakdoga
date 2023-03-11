<?php

    require 'model/chat.php';
    $chat= new Chatroom($db);

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $currentRoom = 0;

    $currentRoom = $_REQUEST['currentRoom'] ?? "";

    $currentRoomName = $chat->checkRoomNames($currentRoom);

    $currentUser = 0;

    $currentUser = $_SESSION['id'] ?? "";

    $publics = $chat->checkNumberOfPublics();

    $privates = $chat->checkNumberOfPrivates($currentUser);

    $publicIDs = $chat->checkPublicIDs();

    $privateIDs = $chat->checkPrivateIDs($currentUser);

    $messageIDs = $chat->checkMessageIDs($currentRoom);

    $roomMessages = $chat->checkRoomMessageNumber($currentRoom);

    $ownedRoom = $chat->checkOwnership($currentUser);

    $memberNumber = $chat->checkMemberNumber($currentRoom);

    $memberIDs = $chat->checkMemberIDs($currentRoom);


    if(array_key_exists('send_message', $_POST)) {
        $chat->sendMessage(htmlspecialchars($_POST['message_field']), $currentRoom);
    }

    if(array_key_exists('create', $_POST)) {
        $chat->createRoom(htmlspecialchars($_POST['roomName']), $currentUser);
        header("Location: index.php?page=chat&currentRoom=".$currentRoom);
        exit();
    }

    if(array_key_exists('add', $_POST)) {
        $inviteValid = $chat->checkMembership($_POST['invited'], $currentRoom);
        if($inviteValid == 1){
            $chat->inviteUser(htmlspecialchars($_POST['invited']), $currentRoom);
        }
        else{
            $e_message = 'This user is already part of the chatroom.';
        }
    }

    if(array_key_exists('remove', $_POST)) {
        $chat->removeUser($_POST['toBeRemoved'], $currentRoom);
    }

    if(array_key_exists('delete', $_POST)) {
        $chat->deleteRoom($currentRoom);
        header("Location: index.php?page=chat&currentRoom=1");
        exit();
    }


    echo'
    <script  type="text/javascript">
        setInterval(function(){$("#room_view").load(location.href+" #room_view>*","");}, 2500);
    </script>
    ';
    echo'
    <script  type="text/javascript">
        setInterval(function(){$("#rooms").load(location.href+" #rooms>*","");}, 2500);
    </script>
    ';
    echo'
    <script>
        function toggleNav() {
            var x = document.getElementById("mySidepanel");
            if (x.style.width === "250px") {
                x.style.width = "0px";
            } else {
                x.style.width = "250px";
            }
        }
    </script>
    ';
require "view/chat.php";
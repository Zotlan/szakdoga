<?php

require_once 'dbinc.php';

class Chatroom{

    private $db;

    function __construct($db){
        $this->db=$db;
    }
    public function checkOwnership($currentUser){
        $owned = 0;
        $sql = "SELECT * FROM membership WHERE user_id = '".$currentUser."' AND membership_type = 1";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $owned = $row['chat_id'];
            }
        }
        return $owned;
    }
    public function checkNumberOfPublics(){
        $numberOfRooms = "";
        $sql = "SELECT * FROM chat WHERE publicity = 1";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $numberOfRooms++;
            }
        }
        return $numberOfRooms;
    }
    public function checkNumberOfPrivates($currentUser){
        $numberOfRooms = 0;
        $sql = "SELECT * FROM membership WHERE user_id = '".$currentUser."'";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $numberOfRooms++;
            }
        }
        return $numberOfRooms;
    }
    public function checkRoomNames($roomNumber){
        $chatName = "";
        $sql = "SELECT chat_name FROM chat WHERE chat_id = '".$roomNumber."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $chatName = $row["chat_name"];
            }
        }
        return $chatName;
    }
    public function checkPublicIDs(){
        $i = 0;
        $ID[$i] = "";
        $sql = "SELECT * FROM chat";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $ID[$i] = $row['chat_id'];
                $i++;
            }
        }
        return $ID;
    }
    public function checkPrivateIDs($currentUser){
        $i = 0;
        $ID[$i] = "";
        $sql = "SELECT * FROM membership WHERE user_id = '".$currentUser."'";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $ID[$i] = $row['chat_id'];
                $i++;
            }
        }
        if(empty($ID)){}
        else{
            return $ID;
        }
    }
    public function checkRoomMessageNumber($roomNumber){
        $roomMessages = "";
        $sql = "SELECT * FROM messages WHERE chat_id = '".$roomNumber."'";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $roomMessages++;
            }
        }
        return $roomMessages;
    }
    public function checkMessageNumber($roomNumber){
        $allMessages = "";
        $sql = "SELECT * FROM messages";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $allMessages++;
            }
        }
        return $allMessages;
    }
    public function checkMessageIDs($roomNumber){
        $i = 0;
        $ID[$i] = "";
        $sql = "SELECT * FROM messages WHERE chat_id = '".$roomNumber."'";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $ID[$i] = $row['message_id'];
                $i++;
            }
        }
        return $ID;
    }
    public function checkMessageText($messageID, $roomNumber){
        $text = "";
        $sql = "SELECT message_content FROM messages WHERE message_id = '".$messageID."' AND chat_id = '".$roomNumber."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $text = $row["message_content"];
            }
        }
        return $text;
    }
    public function checkMessageSender($messageID){
        $user = "";
        $username = "";
        $sql = "SELECT * FROM messages WHERE message_id = '".$messageID."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $user = $row["user_id"];
            }
        }
        $sql = "SELECT userName FROM user WHERE userID = '".$user."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $username = $row["userName"];
            }
        }
        return $username;
    }
    public function createRoom($chatName, $currentUser){
        $createdRoomID = "";
        $sql = "INSERT INTO chat (chat_id, chat_name, publicity, owner_id) VALUES (NULL,'".$chatName."',2,'".$_SESSION["id"]."')";
        $result = $this->db->dbinsert($sql);
        $sql = "SELECT chat_id FROM chat WHERE chat_name = '".$chatName."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $createdRoomID = $row["chat_id"];
            }
        }
        $sql = "INSERT INTO membership (id, user_id, chat_id, membership_type) VALUES (NULL,'".$currentUser."','".$createdRoomID."',1)";
        $result = $this->db->dbinsert($sql);
    }
    public function checkMembership($userName,$roomID){
        $invitedUser = "";
        $inviteValid = 1;
        $sql = "SELECT * FROM user WHERE userName LIKE '".$userName."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $invitedUser = $row["userID"];
            }
        }
        echo $invitedUser;
        echo $roomID;
        $sql = "SELECT * FROM membership WHERE user_id ='".$invitedUser."' AND chat_id = '".$roomID."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $inviteValid = 0;
            }
        }
        return $inviteValid;
    }
    public function inviteUser($userName,$roomID){
        $invitedUser = 0;
        $sql = "SELECT * FROM user WHERE userName LIKE '".$userName."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $invitedUser = $row["userID"];
            }
        }
        $sql = "INSERT INTO membership (id, user_id, chat_id, membership_type) VALUES (NULL,'".$invitedUser."','".$roomID."',2)";
        $result = $this->db->dbinsert($sql);
    }

    public function sendMessage($message, $currentRoom){
        $sql = "INSERT INTO messages (message_id, user_id, message_content, message_timestamp, chat_id) VALUES (NULL,'".$_SESSION["id"]."','".$message."',NULL,'".$currentRoom."')";
        $result = $this->db->dbinsert($sql);
    }
}
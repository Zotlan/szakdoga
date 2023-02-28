<?php

require_once 'dbinc.php';

class Chatroom{

    private $db;

    function __construct($db){
        $this->db=$db;
    }
    public function checkPublicRooms(){
        $numberOfRooms = "";
        $sql = "SELECT * FROM chat WHERE publicity = 1";
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
    public function checkRoomIDs(){
        $i = 0;
        $sql = "SELECT * FROM chat";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $ID[$i] = $row['chat_id'];
                $i++;
            }
        }
        return $ID;
    }
    public function checkRoomMessageNumber($roomNumber){
        $roomMessages = "";
        $allMessages = "";
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
        $ID = "";
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
    public function createRoom(){}

    public function sendMessage($message, $currentRoom){
        $sql = "INSERT INTO messages (message_id, user_id, message_content, message_timestamp, chat_id) VALUES (NULL,'".$_SESSION["id"]."','".$message."',NULL,'".$currentRoom."')";
        $result = $this->db->dbinsert($sql);
    }
}
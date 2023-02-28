<?php

require_once 'dbinc.php';

class Chatroom{

    private $db;

    function __construct($db){
        $this->db=$db;
    }

    public function createRoom(){}

    public function sendMessage(){}

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
        $sql = "SELECT chat_name FROM chat WHERE chat_id = '".($roomNumber)."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $chatName = $row["chat_name"];
            }
        }
        return $chatName;
    }
}
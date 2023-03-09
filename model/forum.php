<?php

require_once 'dbinc.php';

class Forum{

    private $db;

    function __construct($db){
        $this->db = $db;
    }
    public function checkPostNumber(){
        $posts = "";
        $sql = "SELECT * FROM post";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $posts++;
            }
        }
        return $posts;
    }
    public function checkCategoryNumber(){
        $cats = "";
        $sql = "SELECT * FROM category";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $cats++;
            }
        }
        return $cats;
    }
    public function checkCategoryID(){
        $i = 0;
        $sql = "SELECT * FROM category";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $ID[$i] = $row['cat_id'];
                $i++;
            }
        }
        return $ID;
    }
    public function checkCategoryName($catNumber){
        $chatName = "";
        $sql = "SELECT cat_name FROM category WHERE cat_id = '".$catNumber."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $chatName = $row["cat_name"];
            }
        }
        return $chatName;
    }
    public function uploadPost($title, $catID, $content){
        $sql = "INSERT INTO post (post_id, poster_id, post_title, cat_id, post_content, post_time_stamp) VALUES (NULL, '".$_SESSION['id']."','".$title."' , '".$catID."', '".$content."', NULL)";
        $result = $this->db->dbinsert($sql);
    }
}
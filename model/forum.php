<?php

require_once 'dbinc.php';

class Forum{

    private $db;

    function __construct($db){
        $this->db = $db;
    }

    // Stuff about the posts
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
    public function checkPostID(){
        $i = 0;
        $sql = "SELECT post_id FROM post";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $ID[$i] = $row['post_id'];
                $i++;
            }
        }
        return $ID;
    }
    public function checkPosterID($postID){
        $i = 0;
        $sql = "SELECT poster_id FROM post WHERE post_id = '".$postID."'";
        if($result = $this->db->dbselect($sql)) {
            while($row = $result->fetch_assoc()){
                $ID[$i] = $row['poster_id'];
                $i++;
            }
        }
        return $ID;
    }
    public function checkPosterName($posterID){
        $posterName = "";
        $sql = "SELECT userName FROM user WHERE userID = '".$posterID."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $posterName = $row["userName"];
            }
        }
        return $posterName;
    }
    public function checkPostTitle($postID){
        $postTitle = "";
        $sql = "SELECT post_title FROM post WHERE post_id = '".$postID."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $postTitle = $row["post_title"];
            }
        }
        return $postTitle;
    }
    public function checkPostContent($postID){
        $postContent = "";
        $sql = "SELECT post_content FROM post WHERE post_id = '".$postID."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $postContent = $row["post_content"];
            }
        }
        return $postContent;
    }


    // functions about categories
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
        $catName = "";
        $sql = "SELECT cat_name FROM category WHERE cat_id = '".$catNumber."'";
        if($result = $this->db->dbselect($sql)) {
            if($row = $result->fetch_assoc()){
                $catName = $row["cat_name"];
            }
        }
        return $catName;
    }

    // uploading post
    public function uploadPost($title, $catID, $content){
        $sql = "INSERT INTO post (post_id, poster_id, post_title, cat_id, post_content, post_time_stamp) VALUES (NULL, '".$_SESSION['id']."','".$title."' , '".$catID."', '".$content."', NULL)";
        $result = $this->db->dbinsert($sql);
    }
}
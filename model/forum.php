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

}
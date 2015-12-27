<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("DBUtils.php");
class Venue{
    var $img, $date, $venue, $desc;
    
    public function setImg($param) {
        $this->img = $param;
    }
    public function getImg() {
        return $this->img;
    }
    
    public function setDate($param) {
        $this->date = $param;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function setVenue($param) {
        $this->venue = $param;
    }
    
    public function getVenue() {
        return $this->venue;
    }
    
    public function setDesc($param) {
        $this->desc = $param;
    }
    
    public function getDesc() {
        return $this->desc;
    }
    
    public function getAllVenues() {
        $utils = new DBUtils();
        return $utils->getAllContent();
    }
}


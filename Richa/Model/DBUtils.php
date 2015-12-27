<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('Venue.php');
class DBUtils{
    var $servername = "127.0.0.1";
    var $username = "root";
    var $password = "";
    var $dbname = "blog";
    var $conn;

    public function bookTickets($username, $tickets) {
        $this->connect();
        $sql = "UPDATE `userdetails` SET `TicketsBooked`=".$tickets." WHERE username = '".$username."';";
        
        $val =  $this->conn->query($sql) ;
        $this->disconnect();
        return $val;
        
    }
    
    public function verifyUser($username, $password) {
        $this->connect();
        $sql = "SELECT USERNAME FROM USERDETAILS WHERE USERNAME='".$username."' AND PASSWORD = '".$password."';";
        $var = $this->conn->query($sql);
        if ($var->num_rows > 0){
            $return_val = TRUE;
        }else{
            $return_val = FALSE;
        }
        $this->disconnect();
        return $return_val;
    }
    private function connect(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    
    public function getTicketsBooked($username) {
        $this->connect();
        $sql = "SELECT TicketsBooked from userdetails WHERE USERNAME='".$username."';";
        $result = $this->conn->query($sql);
        $this->disconnect();
        if($result ->num_rows >0){
            while($row = $result->fetch_assoc()){
                return $row["TicketsBooked"];
            }
        }
    }
    
    
    public function cancelTickets($username) {
        $this->connect();
        $sql = "UPDATE userdetails set TicketsBooked = 0 WHERE USERNAME='".$username."';";
        $result = $this->conn->query($sql);
        $this->disconnect();
        return $result;
    }   
    
    private function disconnect(){
        $this->conn->close();
    }
    
    public function getAllContent() {
        $SQL = "SELECT `Img_loc`, `Date`, `Venue`, `Desc` FROM `content`";
        $this->connect();
        $result = $this->conn->query($SQL);
        if ($result->num_rows > 0) {
            $array = array();
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $v = new Venue();
                $v->setImg($row["Img_loc"]);
                $v->setDate($row["Date"]);
                $v->setVenue($row["Venue"]);
                $v->setDesc($row["Desc"]);
                $array[$i] = $v;
                $i++;
            }
            return $array;
        }
        return NULL;
    }
}

?>
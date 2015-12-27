<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './Model/DBUtils.php';
class Ticket{
    
    var $user;
    var $totalTckts;
    
    public function __construct() {
        $this->user = $_SESSION["id"];
    }
    
    public function bookTickets($tickets){
        $this->totalTckts = $tickets;
        $_SESSION["totalTicket"] = $tickets;
        $utils = new DBUtils();
        $booked = $utils->getTicketsBooked($this->user) + $tickets;
        return $utils->bookTickets($_SESSION["id"], $booked);
    }
    
    public function cancel() {
        $utils = new DBUtils();
        return $utils->cancelTickets($this->user);
        
    }


    public function status(){
        $utils = new DBUtils();
        $var = $utils->getTicketsBooked($this->user);
        return $var;
    }
}
?>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('/Model/Ticket.php');
$tckt = new Ticket();
$title = "Cancel Tickets";
$content = '<form method="post" action="" class="Text">
        <p> You have booked '.$tckt->status().' tickets</p>
        <p>Do you really want to cancel your tickets?
        <class="submit"><input type="submit" name="commit" value="Cancel"></p>
        <br>
        </form>';
        
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if($tckt->cancel()){
        $content = '<div class="Text"><p>Cancelled your tickets</p></div>';
    }else{
        $content = '<div class="Text"> <p>Tickets couldnot be cancelled. Please try again in some time</p></div>';
    }
}

include_once './Template.php';

?>
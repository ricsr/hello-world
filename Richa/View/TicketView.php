<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('./Model/Ticket.php');
$title = "Book Tickets";
$content = '<form method="post" action="" class="Text">
        <p>Number of Tickets : <input type="number" name="no_tckts" value="" placeholder="Number of tickets">
        <class="submit"><input type="submit" name="commit" value="Book"></p>
        <br>
        </form>';
        
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $tckt = new Ticket();
    if($tckt->bookTickets($_POST["no_tckts"])){
        $content = '<div class="Text"> <p>Tickets Booked</p></div>';
    }else{
        $content = '<div class="Text"> <p>Tickets couldnot be booked. Please try again in some time</p></div>';
    }
}


include_once './Template.php';

?>

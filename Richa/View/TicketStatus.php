<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include('./Model/Ticket.php');
$title = "Ticket Status";
$tckt = new Ticket();
$content = '<div class="Text">
        <p>Confirmed Number of tickets : '.$tckt->status().'</p>
        <br>
        </form>';
        


include_once './Template.php';

?>

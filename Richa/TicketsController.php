<?php session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$title='Where is the Party tonight!';
include_once("TicketsController.php");
$sc = new TicketsController();
$sc->divertPage();

class TicketsController{
    public function divertPage(){
        if(!isSet($_SESSION["id"])){
            global $content;
            global $title;
            $title = "Please login to continue";
            $content = '<div><h2 class="Text">Please <a href="LoginLogoutController.php">Login</a> to book tickets to PARTY OF THE SEASON.</h3></div>';
            include './Template.php';
        }else{
            if($_GET["type"]=="Book"){
                include './View/TicketView.php';
            }else if($_GET["type"] == "Status"){
                include './View/TicketStatus.php';
            }else{
                include './View/CancelTicketView.php';
            }
        }
    }
}
?>
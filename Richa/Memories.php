<?php session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('./Model/Venue.php');

$title = "Memories";

$v = new Venue();
$venue_arr = $v->getAllVenues();

$length = count($venue_arr);

$include= '';
for($i = 0 ; $i < $length ; $i++){
    $include = $include.'
    <div class="Text"><p><img src="'.$venue_arr[$i]->getImg().'" width="500px" height="250px"/></p>'.
            '<p>Date : '.$venue_arr[$i]->getDate().'</p>'
            . '<p>Venue : '.$venue_arr[$i]->getVenue().'</p>'
            . '<p>Comments : '.$venue_arr[$i]->getDesc().'</p><br></div>';
}
$content = $include;
include_once('./Template.php');

?>

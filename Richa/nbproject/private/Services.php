<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once("ServicesController.php");

$sc = new ServicesController();
$sc.invoke();

include './Template.php';
?>

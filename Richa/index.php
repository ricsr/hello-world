<?php session_start();
$title = "Main Page";
$content = '<div class="mainPageContent">
    <br>
    <h2 class="Text">Bid adieu to 2015 with the biggest Musical Festival!</h2>
    <h4 class="Small">Welcome the New Year in style<br></h4>
    <h4 class="Small2">Main performances by<br>
    Enrique<br>
    Arijit Singh<br></h4>
    <h4 class="Small">
    <br>C u there!
    <br>Venue : Goa!
    <br>Date : 2015-12-13
    <br><a href="./TicketsController.php?type=Book">Book Tickets</a> today!
    </h4>
</div>';
include './Template.php';


?>


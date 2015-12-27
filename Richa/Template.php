<?php 

?>
<html>
    <head>
        <script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }
          var images = [], x = -1;
          images[0] = "./img/party2.jpg";
          images[1] = "./img/party3.jpg";
          images[2] = "./img/main_party.jpg";
          images[3] = "./img/party4.jpg";
          
      </script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <title>
            <?php echo $title; ?>
        </title>
        <script>
        </script>
    </head>
    <body onload="startTimer()">
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1235006983181112',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
        <div id = "main" class="main">
            <div id="headerImg" class="headerImg">
                <img src="./img/main_party.jpg" id="img" class="mainImg"/>
            </div>
            <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
                <nav class="navigation" id="nav">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#" onmouseover="mopen('tckt')" onmouseout="close()">Tickets</a>
                        <div id="tckt" 
                            onmouseover="mcancelclosetime()" 
                            onmouseout="mclosetime()">
                            <a href="./TicketsController.php?type=Book">Book Tickets</a>
                            <a href="./TicketsController.php?type=Status">Check Status</a>
                            <a href="./TicketsController.php?type=Cancel">Cancel Tickets</a>
                            <script>
                            
          var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;

function mopen(id)
{	
	mcancelclosetime();

	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

document.onclick = mclose; 
                            </script>
                        </div></li>
                        <li><a href="Memories.php">Memories</a></li>
                        <li><a href="ContactUs.php">Contact Us</a></li>
                        <?php if(isset($_SESSION["id"])){
                           echo '<li><a href="LoginLogoutController.php">Logout</a></li>';
                        }else{
                           echo '<li><a href="LoginLogoutController.php">Login</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            <div id="content">
                <?php echo $content; ?>
            </div>
            <footer>
                
            </footer>
        </div>

    </body>
</html>
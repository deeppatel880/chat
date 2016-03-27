<?php 
   include "db.php"
 ?>
  <!DOCTYPE html>
  <html>
  <head>
	<title>Selecting Username</title>
	<link rel="stylesheet" type="text/css" href="start.css">
  </head>
  <body>
  <h1>Chat Messenger</h1>
  <div class="nametag">
     <form method="post" action="index.php">
       <input type="text" name="name" placeholder="Enter your Username"></input>
       <input type="submit" name="submit" value="Choose Username"></input>
       <?php 
           if (isset($_POST['submit'])) {
           	$name = $_POST['name'];
           	$file = fopen('chatpage.php', 'r+');
           	# code...
           	if (empty($name)) {

           		# code...
           		echo "Please Enter Your Username";

           	} else {
           		# code...
           		echo fread($file, filesize('chatpage.php'));

           	}
           	
          }
           

        ?>
       

     </form> 
  </div>     
  </body>
  </html>
    	
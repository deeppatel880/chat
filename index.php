<?php 
include 'db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Chat System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		function ajax(){
			var req  = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if(req.readyState == 4 && req.status ==200)
				{
				document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET','chat.php',true);
			req.send();
		}
		setInterval(function(){ajax()}, 1000);
	</script>
</head>
<body onload="ajax();">
<div id="container">
	<div id="chat_box" >
	<div id="chat"></div>
	
	</div>
	<form method="post" action="index.php">
		<input type="text" name="name" placeholder="Enter Name"></input>
		<textarea name="message" placeholder="Enter Your Message Here"></textarea>
		<input type="submit" name="submit" value="Send it"></input>
	</form>

	<?php 
	if (isset($_POST['submit'])) {
		$insertname = $_POST['name'];
		$insertmsg = $_POST['message'];
	    

	    $sql = "INSERT INTO chat (name,msg) VALUES ('$insertname','$insertmsg')";  
        
        $q = mysqli_query($con, $sql) or die(mysql_error());
     }



	 ?>

</div>

</body>
</html>
<?php 
       include 'db.php';

        $query = "SELECT * FROM chat ORDER BY id ASC";
        $run = $con->query($query);

        while($row = $run->fetch_array()) :
	 ?>
		<div id="chat_data">
		     <span style="color:#c0392b;"><?php echo $row['name']; ?>:</span>
		     <span style="color:#3498db"><?php echo $row['msg']; ?></span>
		     <span style="float: right;"><?php echo $row['date']; ?></span>
			
		</div>

       <?php endwhile; ?>
<?php
			
			include('config1.php');
		
			$Guest_id=$_GET['Guest_id'];
		
			$user=$_POST['user'];
			mysql_query("DELETE FROM reservation WHERE Guest_id='$Guest_id'");
			header("location: res-view.php");
			exit();
			
			?>
			
			
z
<?php
			
			include('config1.php');
		
			$Guest_id=$_GET['Guest_id'];
			$pc_time=$_POST['pc_time'];
			$pc_date=$_POST['pc_date'];
			$user=$_POST['user'];
			mysql_query("DELETE FROM reservation WHERE Guest_id='$Guest_id'");
			header("location: res-view.php");
			exit();
			
			?>
			
			

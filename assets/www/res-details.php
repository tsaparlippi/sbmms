<!DOCTYPE html> 
<html> 
	<head> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	
	
</head>


<body>

<div data-role="dialog">
					

<div data-role="header" data-position="inline">
			
			<h1>Reservation's Details</h1>
		
			</div>

			<div data-role="content">

<?php
	
			include('config1.php');
		if (isset($_GET['Guest_id'])) {
					$Guest_id = $_GET['Guest_id'];
								}
			$result = mysql_query("SELECT * FROM guest WHERE Guest_id = '$Guest_id'");
			while($row = mysql_fetch_array($result)) {
			$Name = $row['Name'];
			$Company = $row['Company'];
			$Contact_no = $row['Contact_no'];
			$Payment = $row['Payment'];
			$Amount = $row['Amount'];
			
			$resultA = mysql_query("SELECT * FROM reservation_info WHERE Guest_id = '$Guest_id'");
			while($rowA = mysql_fetch_array($resultA)) {
			$Room_no = $rowA['Room_no'];
			
			$resultB = mysql_query("SELECT * FROM room WHERE Room_no = '$Room_no'");
			while($rowB = mysql_fetch_array($resultB)) {
			$venue = $rowB['Description'];
			
			
  				 
				echo '<center>';
				echo '<b>'.$Name.'</b>';
				echo '<br>';
				echo '<b>'.$Contact_no.'</b>';
				echo '<br>';
				echo '<b>'.$Company.'</b>';
				echo '<br>';
				echo '<b>'.$venue.'</b>';
				echo '<br>';
				echo '<b>'.$Payment.': P'.$Amount.'</b>';
				echo '<br>';
				
                
			}
			}	
			}
	
		
	?>
			
			</div>

	</div>
</body>
</html>
			

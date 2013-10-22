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
			
			
				echo '<center>';
				echo '<table width="600" border="0" cellpadding="0">';
				echo '<tr>';
				echo '<td width="87" valign="top"><div align = "right"/>  Name:</td>';
				echo '<td width="281"><div align = "left"/>&nbsp; &nbsp; &nbsp;<b>'.$Name.'</b></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td><div align = "right"/>Contact Number:</td>';
				echo '<td><div align = "left"/>&nbsp; &nbsp; &nbsp;<b>'.$Contact_no.'</b></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td><div align = "right"/>Event:</td>';
				echo '<td><div align = "left"/>&nbsp; &nbsp; &nbsp;<b>'.$Company.'</b></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td><div align = "right"/>Total Payment:</td>';
				echo '<td><div align = "left"/>&nbsp; &nbsp; &nbsp;<b>P'.$Amount.'&nbsp; &nbsp; &nbsp;('.$Payment.')</b></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td valign="top"><div align = "right"/>Venue(s): </td>';
				echo '<td><div align = "left"/>';
				
			$resultA = mysql_query("SELECT * FROM reservation_info WHERE Guest_id = '$Guest_id'");
			while($rowA = mysql_fetch_array($resultA)) {
			$Room_no = $rowA['Room_no'];
			$resultB = mysql_query("SELECT * FROM room WHERE Room_no = '$Room_no'");
			while($rowB = mysql_fetch_array($resultB)) {
			$venue = $rowB['Description'];

				echo '&nbsp; &nbsp; &nbsp;<b>'.$venue.'</b>';
				
				
			}
			}	
			}
				echo '</tr>';
                echo '</table>';
		
	?>
			
			</div>

	</div>
</body>
</html>
			

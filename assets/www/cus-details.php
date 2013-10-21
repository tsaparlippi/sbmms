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
			<a href="cus-view.php" data-icon="arrow-l">Back</a>
			<h1>Customer's Details</h1>
		
			</div>

			<div data-role="content">

<?php
	
			include('config1.php');
		if (isset($_GET['id'])) {
					$id = $_GET['id'];
								}
			$result = mysql_query("SELECT * FROM customerdatabase WHERE id = '$id'");
			while($row = mysql_fetch_array($result)) {
			$name = $row['name'];
			$contactnumber = $row['contactnumber'];
  				 
				echo '<center>';
				echo '<b>'.$name.'</b>';
				echo '<br>';
				echo $contactnumber;
				echo '<br><br>';
                echo '<td>' . 'Booked Events: ' . '</td>';
				$resultA = mysql_query("SELECT * from schedules WHERE customer='$name'");
								
				
			while($rowA = mysql_fetch_array($resultA)) {
									$event= $rowA['event'];
									$date = $rowA['date'];
									$venue = $rowA['venue'];
									$status = $rowA['status'];
									echo "<div data-role='content'>
														
														<div  data-role='collapsible-set'data-iconpos='right' >
														<div data-role='collapsible' data-theme='b' data-content-theme='a'  data-collapsed-icon='arrow-d'   data-expanded-icon='arrow-u'style='margin-bottom:-20px; margin-top: -20px; '>
														<h2> $event</h2>
														$date</br>$venue</br>$status
														</div>
														</div></div>";
															
				}
			
				
			}
	
		
	?>
			
			</div>

	</div>
</body>
</html>
			

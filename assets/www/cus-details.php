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
		if (isset($_GET['Guest_id'])) {
					$Guest_id = $_GET['Guest_id'];
								}
			$result = mysql_query("SELECT * FROM guest WHERE Guest_id = '$Guest_id'");
			while($row = mysql_fetch_array($result)) {
			$Name = $row['Name'];
			$Contact_no = $row['Contact_no'];
  				 
				echo '<center>';
				echo '<b>'.$Name.'</b>';
				echo '<br>';
				echo $Contact_no;
				echo '<br><br>';
                echo '<td>' . 'Booked Events: ' . '</td>';
				$resultA = mysql_query("SELECT * from guest WHERE Name='$Name'");
								
				
			while($rowA = mysql_fetch_array($resultA)) {
									$Company= $rowA['Company'];
									$TDate = $rowA['TDate'];
									$Venue = $rowA['Venue'];
									$Status = $rowA['Status'];
									echo "<div data-role='content'>
														
														<div  data-role='collapsible-set'data-iconpos='right' >
														<div data-role='collapsible' data-theme='b' data-content-theme='a'  data-collapsed-icon='arrow-d'   data-expanded-icon='arrow-u'style='margin-bottom:-20px; margin-top: -20px; '>
														<h2> $Comapny</h2>
														$TDate</br>$venue</br>$Status
														</div>
														</div></div>";
															
				}
			
				
			}
	
		
	?>
			
			</div>

	</div>
</body>
</html>
			

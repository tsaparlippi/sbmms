<!DOCTYPE html> 
<html>

	<meta name="viewport" content="width=device-width, initial-scale=1" url="rev-view.php"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	
	
<body>

	<div data-role="page" class="type-home" 
			style="background: #FFAC2F;
					background-repeat: repeat; 
					background-size: 100% 100%;">
						

		<div data-role="header" data-position="inline">
			<a href="index.php" data-icon="arrow-l" rel="external">Back</a>
			<h1>Revenues</h1>
		</div>
		
		
			<div data-role="content">
			
			
				
				<center>
				
						<?php
								include("config1.php");
							
								$revenues = mysql_query("SELECT * FROM guest WHERE Amount != '0'") ?>
					
							<?php
			  
								$db2 = mysql_query("SELECT Guest_id FROM guest");
							
									if (isset($_GET['Guest_id'])) {
										$Guest_id = $_GET['Guest_id'];
								
									$db2 = "DELETE FROM revenues WHERE Guest_id = '$Guest_id'";
									
										if (@mysql_query($db2)) {
		
										} else {
		
									}
								}
								
								echo '<ul data-role="listview" data-filter="true" data-filter-placeholder="Search revenues..." data-inset="true">';
		
								$db = mysql_query("SELECT * FROM revenues ORDER BY Guest_id ASC ");
									while($row = mysql_fetch_array($revenues)){ 
					
											echo '<li>';
											echo '<h2>'.$row['Name'].'</h2>';
											echo '<p> <font color="green">'.$row['TDate'].' | '.$row['Company'].' | P'.$row['Amount'].'</font> </a>';
											echo ' </li>';
      					
										
								}
									
									echo '</ul>';
										?>
							

</body>
</html>
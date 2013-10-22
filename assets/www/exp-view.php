<!DOCTYPE html> 
<html>

	<meta name="viewport" content="width=device-width, initial-scale=1" url="rev-view.php"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>

		
<body>

	<div data-role="page" class="type-home" 
			style="background-image: url('images/bg.jpg'); 
					background-attachment: fixed; 
					background-repeat: repeat; 
					background-size: 100% 100%;">
		

		<div data-role="header" data-position="inline">
			<a href="index.php" data-icon="arrow-l">Back</a>
			<h1>Expenses</h1>
				<a href="addexp.php" data-rel="dialog" data-transition="pop" data-role="button" data-theme="a" data-icon="plusthick"  data-inline="true" rel="external">Add</a>
		</div>
		
			<div data-role="content">
				
				<center>
					
				
							<?php
								include("config1.php");
							
								$expenses = mysql_query("SELECT * FROM expenses") ?>
					
							<?php
			  
								$db2 = mysql_query("SELECT id FROM expenses");
							
									if (isset($_GET['id'])) {
										$id = $_GET['id'];
								
									$db2 = "DELETE FROM expenses WHERE id = '$id'";
									
										if (@mysql_query($db2)) {
		
										} else {
		
									}
								}
								
								echo '<ul data-role="listview" data-filter="true" data-filter-placeholder="Search expenses..." data-inset="true">';
		
								$db = mysql_query("SELECT * FROM expenses ORDER BY id ASC");
									while($row = mysql_fetch_array($expenses)){ 
					
										echo '<li>';
										echo '<h2>'.$row['expense'].'</h2>';	
										echo '<p> <font color="green">'.$row['date'].' | P'.$row['cost'].'</font> </a>';
										echo '</li> ';
							
								}
								
								
									echo '</ul>';
							?>
				
				
</body>
</html>
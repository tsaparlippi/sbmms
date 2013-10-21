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
					
		<style type="text/css" title="currentStyle">
			@import "css/demo_page.css";
			@import "css/demo_table_jui.css";
		</style>
		
		<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				oTable = $('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});
			} );
		</script>
		

		<div data-role="header" data-position="inline">
			<a href="index.php" data-icon="arrow-l" rel="external">Back</a>
			<h1>Revenues</h1>
			<a href="addrev"  data-role="button" data-theme="a" data-icon="plusthick"  data-inline="true" rel="external">Add</a>
		</div>
			
		
			<div data-role="content">
				
				<center>
					
					<div id="dt_example">
									
					<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

						<thead>
							<tr>
								<th>Date</th>
								<th style="width:30px">Event</th>
								<th>Customer</th>
								<th>Amount</th>
						
							</tr>
						</thead>
					
						<tbody>
					
							<?php
								include("config1.php");
							
								$revenues = mysql_query("SELECT * FROM revenues") ?>
					
							<?php
			  
								$db2 = mysql_query("SELECT id FROM revenues");
							
									if (isset($_GET['id'])) {
										$id = $_GET['id'];
								
									$db2 = "DELETE FROM revenues WHERE id = '$id'";
									
										if (@mysql_query($db2)) {
		
										} else {
		
									}
								}
		
								$db = mysql_query("SELECT * FROM revenues ORDER BY id ASC");
									while($row = mysql_fetch_array($revenues)){ 
					
										echo '<tr>';
											echo '<td>'.$row['date'].'</td>';
											echo '<td>'.$row['event'].'</td>';
											echo '<td>'.$row['customer'].'</td>';
											echo '<td align="right">'.$row['cost'].'</td>';
										echo '</tr> ';
							
								}
							?>
				
						</tbody>
					</table>
					
					</div>

	</div><!-- /page -->
		
				
</body>
</html>

<!DOCTYPE html> 
<html>

	<meta name="viewport" content="width=device-width, initial-scale=1" url="rev-view.php"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script> 
	<script src="js/jquery.mobile.min.js"></script>
	
	<script src="facebox/facebox.js" type="text/javascript"></script>
	<link rel="stylesheet" href="facebox/facebox.css" />
	
	<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/loading.gif',
        closeImage   : 'facebox/closelabel.png'
      })
    })
	</script>
		
	<script type="text/css">
		.ui-dialog-contain {
		width: 92.5%;
		max-width: 500px;
		margin: 10% auto 15px auto;
		padding: 0;
		position: relative;
		top: -15px;
	}
	</script>

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
			<a href="index.php" data-icon="arrow-l">Back</a>
			<h1>Customer's Database</h1>
			
		</div>
		
		
		<br>	
		
			<div data-role="content">
				
				<center>
					
					<div id="dt_example">
				
					<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

					<thead>
						<tr>
							<th>Customer</th>
							
							<?php if($_SESSION['user_type'] != 'User'){ ?><th style="width:50px;">Action</th><?php } ?>
							
						</tr>
					</thead>
					
					<tbody>
				
					<?php 
					include("config1.php");
					$customerdatabase = mysql_query("SELECT * FROM guest") ?>
					<?php
			  
						$db2 = mysql_query("SELECT Guest_id FROM guest");
							if (isset($_GET['Guest_id'])) {
								$Guest_id = $_GET['Guest_id'];
								}
		
						$db = mysql_query("SELECT * FROM guest ORDER BY Guest_id ASC");
						while($row = mysql_fetch_array($customerdatabase)){ 
						$Name = $row['Name'];
					
					
								echo '<tr>';
								echo '<td>'.$row['Name'].'</td>';
		
							echo '<td>';
							echo'<a href="cus-details.php?Guest_id=' .$row['Guest_id'] . ' data-rel="dialog" data-transition="pop"">' . 'View' . '</a>';
							echo'|';
							echo'<a href="editcus.php?Guest_id=' .$row['Guest_id'] . ' data-rel="dialog" data-transition="pop">' . 'Edit' . '</a>';
								
									echo '</td>';
									
								echo '</tr> ';
							
								  }			
							
					?>
					
				
					</tbody>
					</table>
					
					</div>
					
					
			</div><!-- /content -->

	</div><!-- /page -->
		
				
</body>
</html>
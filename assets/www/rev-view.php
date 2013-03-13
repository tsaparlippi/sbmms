<!DOCTYPE html> 
<html> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<link rel="stylesheet" href="/tableview-master/css/latest.css" />
	<script src="js/jquery.min.js"></script>
	<script src="tableview-master/js/latest.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	
	<script src="facebox/facebox.js" type="text/javascript"></script>
 
	
	<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/loading.gif',
        closeImage   : 'facebox/closelabel.png'
      })
    })
	</script>
	
	<style type="text/css" title="currentStyle">
		
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

<body>

<div data-role="page" class="type-home" style="background-image: url('images/bg.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%;">

<div data-role="header" data-position="inline">
				<a href="index.php" data-icon="arrow-l">Back</a>
				<h1>Revenues</h1>
			</div>
	
<div data-role="content">	

		
		
		</div>
		
		<?php include('config1.php'); ?>
		
		
				<center>
				
				<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

					<thead>
						<tr>
							<th style="width:85px;">Date</th>
							<th style="width:85px;">Event</th>
							<th style="width:120px;">Customer</th>
							<th style="width: 70px;">Amount</th>
						
						</tr>
					</thead>
					
					<tbody>
					<?php $revenues = mysql_query("SELECT * FROM revenues") or die(mysql_error());  ?>
					<?php
			  
						$sql2 = mysql_query("SELECT id FROM revenues");
							if (isset($_GET['id'])) {
								$id = $_GET['id'];
								$sql2 = "DELETE FROM revenues WHERE id = '$id'";
									if (@mysql_query($sql2)) {
		
									} else {
		
								}
								}
		
						$sql = mysql_query("SELECT * FROM revenues ORDER BY id ASC");
						while($row = mysql_fetch_array($revenues)){ 
					
								echo '<tr>';
									echo '<td>'.$row['date'].'</td>';
									echo '<td>'.$row['event'].'</td>';
									echo '<td>'.$row['customer'].'</td>';
									echo '<td>'.$row['cost'].'</td>';
								 echo '</tr> ';
							
								  }
			?>
			</tbody>
			</table>
			
			</div></div></div>
			
		</div>
		</div>
				
</body>
</html>
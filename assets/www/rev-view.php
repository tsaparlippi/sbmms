<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script> 
	
	<script type='text/javascript' src='js/jquery-1.8.2.min.js' ></script>
	<script type='text/javascript' src='js/jquery-ui-1.8.24.custom.min.js' ></script>
	
	<script src="lib/jquery.js" type="text/javascript"></script>
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
			@import "js/smoothness/jquery-ui-1.8.4.custom.css";
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

	<center>
	

	
		
		
		
		</div>
	
		</div>
		
		
	</center>
	

		&nbsp;&nbsp;<a href="index.php"><button class="btn" style="width:200px;"><font color="#000"><b>Back</b></font></button></a><br>
	
		
		</div>
		
		<?php include('config1.php'); ?>
		
		<center>
				
				<div id="dt_example" style="width: 860px;">
				<div id="container" style="width: 8">
				<div class="demo_jui" style="width: 860px;">
				
				<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="width: 860px;">

					<thead>
						<tr>
							<th style="width:100px;">Date</th>
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
									echo '<td>'.$row['cost'].'</td>';
								echo '<td>';
									
									echo'<a rel="facebox" href=editrev.php?id=' .$row['id'] . '>' . 'Edit' . '</a>&nbsp;';
									echo '|';
									echo'&nbsp;<a rel="facebox" href=viewrev.php?id=' . $row['id'] . '>' . 'View' . '</a>&nbsp;';
									echo '';
							
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
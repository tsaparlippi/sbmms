
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
					

	<div data-role="header" data-position="inline">
			<a href="index.php" data-icon="arrow-l">Back</a>
			<h1>Customer's Database</h1>
			
		</div>
		
		
		<br>	
		
			<div data-role="content">
				
				<center>
					
					
				
					<?php 
					include("config1.php");
					$customerdatabase = mysql_query("SELECT * FROM guest") ?>
					<?php
			  
						$db2 = mysql_query("SELECT Guest_id FROM guest");
							if (isset($_GET['Guest_id'])) {
								$Guest_id = $_GET['Guest_id'];
								}
		
							echo '<ul data-role="listview" data-filter="true" data-filter-placeholder="Search customer..." data-inset="true">';
							
						$db = mysql_query("SELECT * FROM guest ORDER BY Guest_id ASC");
						while($row = mysql_fetch_array($customerdatabase)){ 
						$Name = $row['Name'];
					
					
								echo '<li>';
								echo '<h2>'.$row['Name'].'</h2>';
								
								echo '<p class="ui-li-aside">
											<a href="cus-details.php?id=' .$row['id'] . ' data-theme="b" data-rel="dialog" data-inline="true"  data-mini="true"  data-transition="pop" data-role="button"">' . 'View' . '</a>
											<a href="editcus.php?id=' .$row['id'] . ' data-rel="dialog"   data-role="button" data-inline="true" data-mini="true" data-transition="pop" rel="external">' . 'Edit' . '</a>';
											
											echo' <div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="c" style="max-width:400px;" class="ui-corner-all">
											<div data-role="header" data-theme="a" class="ui-corner-top">
												<h1>Confirm</h1>	</div>
												<div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
													<h3 class="ui-title">Are you sure you want to cancel schedule?</h3>
												<center>
											<a data-role="button" background="#c1272d" data-inline="true"  data-transition="flow" data-theme="b" rel="external"
														class="delete" Guest_id="<?php echo $Guest_id; ?>" href=deleterev.php?Guest_id=' .$row['Guest_id'] . '>'. 'Yes'.'</a>
													<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a"> No </a> 
												</div>
												</div>';
										
							
							
								  }			
							
					?>
					
				
					</tbody>
					</table>
					
					</div>
					
					
			</div><!-- /content -->

	</div><!-- /page -->
		
				
</body>
</html>
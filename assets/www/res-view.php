
<!DOCTYPE html> 
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" url="rev-view.php"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script> 
	<script src="js/jquery.mobile.min.js"></script>
	
	
	 <script type="text/javascript">
	 $(document).delegate('#simplebool', 'click', function() {
  $(this).simpledialog({
    'mode' : 'bool',
    'prompt' : 'Confirm delete.',
    'useModal': true,
    'buttons' : {
      'OK': {
        click: function () {
          $('#dialogoutput').text('OK');
        }
      },
      'Cancel': {
        click: function () {
          $('#dialogoutput').text('Cancel');
        },
        icon: "delete",
        theme: "c"
      }
    }
  })
})
	

</script>


</head>
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
			<h1>Event's Schedule</h1>
			<a href="reservation.php"  data-role="button" data-theme="a" data-icon="plusthick"  data-inline="true" rel="external">Add</a>
			
		</div>
		
		
		<br>	
		
			<div data-role="content">
				
				<center>
					
					<div id="dt_example">
				
					<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

					<thead>
						<tr>
							<th>Customer</th>
							<th>Schedule</th>
							
						<th style="width:50px;">Action</th>
							
						</tr>
					</thead>
					
					<tbody>
				
					<?php 
					include("config1.php");
					$reservation = mysql_query("SELECT * FROM reservation") ?>
					<?php
			  
						$db2 = mysql_query("SELECT Guest_id FROM reservation");
							if (isset($_GET['Guest_id'])) {
								$Guest_id = $_GET['Guest_id'];
								$db2 = "DELETE FROM reservation WHERE Guest_id = '$Guest_id'";
										if (@mysql_query($db2)) {
		
													} else {
		
														}
												}
		
						$db = mysql_query("SELECT * FROM reservation ORDER BY Guest_id ASC");
						while($row = mysql_fetch_array($reservation)){ 
						$guest_id = $row['Guest_id'];
						$db2 = mysql_query("SELECT * FROM guest WHERE Guest_id = '$guest_id'");
						while($rowA = mysql_fetch_array($db2)){ 
					
					
								echo '<tr>';
								echo '<td>'.$rowA['Name'].'</td>';
								echo '<td>'.$row['Date_start'].' <b>to</b> '.$row['Date_end'].'</td>';
		
							echo '<td>';
							echo'<a href="res-details.php?Guest_id=' .$row['Guest_id'] . ' data-rel="dialog" data-transition="pop"">' . 'View' . '</a>';
							echo'|';
							echo'<a href="editres.php?Guest_id=' .$row['Guest_id'] . ' data-rel="dialog" data-transition="pop" rel="external">' . 'Edit' . '</a>';
							echo'|';
							echo'<a href="#popupDialog" data-rel="popup" data-position-to="window" data-inline="true" data-transition="pop">'.'Cancel'.'</a>';
							
							echo' <div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="c" style="max-width:400px;" class="ui-corner-all">
							<div data-role="header" data-theme="a" class="ui-corner-top">
							<h1>Confirm</h1>	</div>
								<div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
								<h3 class="ui-title">Are you sure you want to cancel schedule?</h3>
							<center>
							<a data-role="button" data-inline="true"  data-transition="flow" data-theme="b" rel="external"
							class="delete" Guest_id="<?php echo $Guest_id; ?>" href=deleterev.php?Guest_id=' .$row['Guest_id'] . '>'. 'Yes'.'</a>
							<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a"> No </a> 
							</div>
							</div>';
										
									echo '</td>';
									
								echo '</tr> ';
							
								  }			
							}
					?>
					
				
					</tbody>
					</table>
					
					</div>
					
					
			</div><!-- /content -->

	</div><!-- /page -->
		
				
</body>
</html>
<?php include("header.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
	function Proceed() {
var r=confirm("Are you sure you want to delete this?");
if (r==true)
  {
  alert("Deleted!");
  }
else
  {
  alert("You pressed Cancel!");
  return false;
  }
	}
  </script>
  
  <script type="text/javascript">
	$(document).ready( function() {
/* amo ni*/
var myDate = new Date();
var pc_date = (myDate.getMonth()+1) + '/' + (myDate.getDate()) + '/' + myDate.getFullYear();
var pc_time = myDate.getHours()+':'+myDate.getMinutes()+':'+myDate.getSeconds();
jQuery(".pc_date").val(pc_date);
jQuery(".pc_time").val(pc_time);
/*asta d*/	
		
		$('.delete').click( function() {
		
		var id = $(this).attr("id");
		var pc_date = $('.pc_date').val();
		var pc_time = $('.pc_time').val();
		var user = $('.user').val();
		
		if(confirm("Are you sure you want to delete this event?")){
			
		
			$.ajax({
			type: "POST",
			url: "delete_sched.php",
			data: ({id: id,pc_date:pc_date,pc_time:pc_time, user:user}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			}
			}); 
			}else{
			return false;}
		});				
	});

</script>
<title>List of Events</title>
<style type="text/css" title="currentStyle">
			@import "css/table/demo_page.css";
			@import "css/table/demo_table_jui.css";
			@import "css/table/jquery-ui-1.8.4.custom.css";
		</style>
		<script type="text/javascript" language="javascript" src="js/table/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
				oTable = jQuery('#schedules').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				});		
		</script>

</head>
<br>
<body class="view_user standard">
<div class="wrapper">

	<div class="header">
		<h2>&nbsp;&nbsp;<font face="Orator Std" size="15">Booking Schedule</font></h2>
	</div>
<?php include("main_menu.php"); ?>
	<div class="right_nav">
	<h1>Schedules</h1>
<?php include("sched_sidebar.php"); ?>
	</div>
	<div class="content">
	
	
	<div class="actions">
	<h2>List of Events</h2>
	
<div class="demo_jui">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="schedules" class="jtable">
	<thead>
		<tr>
			<th><font color="black" face="Orator Std" size="3">Date</th>
			<th><font color="black" face="Orator Std" size="3">Event</th>
			<th><font color="black" face="Orator Std" size="3">Customer</th>
			<th><font color="black" face="Orator Std" size="3">Time</th>
			<th><font color="black" face="Orator Std" size="3">Venue</th>
			
			<?php if($_SESSION['user_type'] != 'User'){ ?><th>Actions</th><?php } ?>
			
		</tr>
	</thead>
	<tbody>
			<?php $schedules = mysql_query("SELECT * FROM schedules") or die(mysql_error());  ?>
			<?php
			  
			  $sql2 = mysql_query("SELECT id FROM schedules");
			  if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql2 = "DELETE FROM schedules WHERE id = '$id'";
	if (@mysql_query($sql2)) {
		
		} else {
		
			 }
			 }
	
$sql = mysql_query("SELECT * FROM schedules ORDER BY id ASC");
while($row = mysql_fetch_array($schedules)){ 
					
				echo '<tr>';
									echo '<td>'.$row['date'].'</td>';
									echo '<td>'.$row['event'].'</td>';
									echo '<td>'.$row['customer'].'</td>';
									echo '<td>'.$row['time'].'</td>';
									echo '<td>'.$row['venue'].'</td>';
						echo '<td>';
									
									echo'<a rel="facebox" href=editsched.php?id=' .$row['id'] . '>' . 'Edit' . '</a>';
									echo '|';
									echo'<a rel="facebox" href=viewsched.php?id=' . $row['id'] . '>' . 'View' . '</a>';
									echo '';
								
									/*echo'<a class="delete" id="<?php echo $id; ?>" href='.$_SERVER['PHP_SELF'].'?id=' .$row['id'] .'>'.'Delete'.'</a>';*/
									echo'<a class="delete" id="<?php echo $id; ?>" href=deletesched.php?id=' .$row['id'] . '&page=$page>'.'<input type="button" value="Delete">'.'</a>';
								 echo '</tr> ';
							
								  }
			?>
			
		</td>
		
	</tr>
</table>

</div></td>
	</tr>
</table>
					</form>
					
					
					
					
				</td>
				
			</tr>
		
	</tbody>
</table>
</div>
	</div>
	
	</div>

</div>
</body>
		<input type="hidden" class="pc_date" name="pc_date"/>
		<input type="hidden" class="pc_time" name="pc_time" />
		<input type="hidden" class="user" value="<?php echo $_SESSION['user_name']; ?>" />
</html>

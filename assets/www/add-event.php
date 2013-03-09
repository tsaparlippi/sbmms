<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<link href="css/index.css" media="screen" rel="stylesheet" type="text/css" />

	<link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/slide.css" media="screen" rel="stylesheet" type="text/css" />
	
	<link rel='stylesheet' href='css/black-tie/jquery-ui-1.8.24.custom.css' />
	
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
		
<body background="images/black.jpg">
	
	
	<div class="leftlogo">
	<img src="images/logo.png">
	</div>

	<center>
	
		<div class="menu-name">
		<img src="images/booksched.png">
		
		<div class="summary-buttons1">
		<a href="calendar.php"><button class="btn">Calendar</button></a> &nbsp;&nbsp;<font size="3" color="#f66300"><b>|</b></font>&nbsp;&nbsp; 
		<a href="event-list.php"><button class="btn btn-info">Event Lists</button></a>  &nbsp;&nbsp;<font size="3" color="#f66300"><b>|</b></font>&nbsp;&nbsp; 
		<a href="add-event.php"><button class="btn btn-danger">Add Event</button></a>
		</div>
	
		</div>
		
		<?php include('config1.php'); ?>
		
	</center>
		<div class="menubox">
		<br><br><br><br><br><br>
		<br><br><br><br><br>
		
		&nbsp;&nbsp;<a href="index.php"><button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Home</b></font></button></a><br>
		&nbsp;&nbsp;<a href="rev-view.php"><button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Revenues</b></font></button></a><br>
		&nbsp;&nbsp;<a href="exp-view.php"><button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Expenses</b></font></button></a><br>
		&nbsp;&nbsp;<a href="summary-rev.php"><button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Summary</b></font></button></a><br>
		&nbsp;&nbsp;<button class="btn btn-warning" style="width:200px;"><font color="#000"><b>File Management</b></font></button><br>
		&nbsp;&nbsp;<a href="bookingsched.php"><button class="btn" style="width:200px;"><font color="#000"><b>Booking Schedule</b></font></button></a><br>
		&nbsp;&nbsp;<button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Customer's Database</b></font></button>
		
		</div>
		
		<div class="sidebox">	
		<br>
		
		<div class="slightleft">
		<b>	<font size="4" color="#000"><b>Add Event</b></font>
		</div>
		<div class="sideleft"><br><br>
			
		<form id="save_sched" name="save_sched" method="post" action="save_sched.php">	
				
		<span> Date: </span> <input type="date" id="date" name="date"/><br><br>
	
		<span> Event: </span> 
		<select id="event" name="event" value="Acquaintance Party">
			<option>Acquaintance Party
			<option>Anniversary
			<option>Baptism
			<option>Birthday
			<option>Christmas Party
			<option>Conference
			<option>Debut
			<option>Despidida Party
			<option>Engagement Party
			<option>Halloween Party
			<option>Overnight
			<option>Pre-Nuptial
			<option>Reunion
			<option>Seminar
			<option>Wedding
			</select> <br><br>
	
	<span>Customer: </span>
			<?php
			   include('config1.php');
				$result = mysql_query("SELECT * FROM customerdatabase");
								
				echo '<select id="customer"  name="customer">';
				echo '<option value=""></option>';	
								while($row = mysql_fetch_array($result))
								  {
									$name= $row['name'];
									echo "<option value='$name'>$name</option>";
																
				}
				echo '</select>';
			?>

			<a rel="facebox" href=cus-add.php?id=' . $row3["product_id"] . '><button class="btn btn-inverse">Add</button></a><br><br>
									
	
	<span> Time: </span> 
	<select id="time" name="time">
	<option>12:00 am
	<option>12:30 am
	<option>1:00 am
	<option>1:30 am
	<option>2:00 am
	<option>2:30 am
	<option>3:00 am
	<option>3:30 am
	<option>4:00 am
	<option>4:30 am
	<option>5:00 am
	<option>5:30 am
	<option>6:00 am
	<option>6:30 am
	<option>7:00 am
	<option>7:30 am
	<option>8:00 am
	<option>8:30 am
	<option>9:00 am
	<option>9:30 am
	<option>10:00 am
	<option>10:30 am
	<option>11:00 am
	<option>11:30 am
	<option>12:00 pm
	<option>12:30 pm
	<option>1:00 pm
	<option>1:30 pm
	<option>2:00 pm
	<option>2:30 pm
	<option>3:00 pm
	<option>3:30 pm
	<option>4:00 pm
	<option>4:30 pm
	<option>5:00 pm
	<option>5:30 pm
	<option>6:00 pm
	<option>6:30 pm
	<option>7:00 pm
	<option>7:30 pm
	<option>8:00 pm
	<option>8:30 pm
	<option>9:00 pm
	<option>9:30 pm
	<option>10:00 pm
	<option>10:30 pm
	<option>11:00 pm
	<option>11:30 pm
	</select> <br><br>
	
	<span> Venue: </span> 
	<select id="venue" name="venue" value="Room #1">
	<option>Room #1
	<option>Room #2
	<option>Room #3
	<option>Room #4
	<option>Function Hall
	<option>Veranda
	</select><br><br>
	
	<div class="buttonleft">
	
	<button id="save" name="SubmitOne" class="btn btn-inverse">Save Changes</button>
	</form>
	</div>
	
	</div></div>
	
</body>
</html>
<!DOCTYPE html> 
<html> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="css/jquery.mobile.min.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile.min.js"></script>
 
 
</head>

<body>



	

<SCRIPT language=Javascript>
  
      function isNumberKey(evt)

      {

         var charCode = (evt.which) ? evt.which : event.keyCode

         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;	
		    return true;

} 
</script>
<div data-role="dialog">
<div data-role="header" data-theme="d">
			<h1>Add Revenue</h1>

		</div>

<div data-role="content" data-theme="c">

<form id="save_sched" name="save_sched" method="post" action="save_sched.php" onSubmit="return check()">	
		<input type="hidden" class="pc_date" name="pc_date"/>
		<input type="hidden" class="pc_time" name="pc_time" />
	<center>	
		<div data-role="fieldcontain">
<input name="TDate" value= "<?php $time_zone = 'Asia/Singapore'; date_default_timezone_set($time_zone); echo date("Y-m-d"); ?>" id="TDate" class="hide"><br>
</div>

<div data-role="fieldcontain">
<select name="event" id="event" required="required">
	<option value=""> Choose event</option>
	<option >Acquaintance Party
	<option>Anniversary
	<option>Baptism
	<option>Birthday
	<option>Christmas Party
	<option>Conference
	<option>Debut
	<option>Despedida Party
	<option>Engagement Party
	<option>Halloween Party
	<option>Overnight
	<option>Pre-Nuptial
	<option>Reunion
	<option>Seminar
	<option>
</select>
	

	<div data-role="fieldcontain">
	
<?php
		
		  include('config1.php');
		$result = mysql_query("SELECT * FROM guest");
								
				echo '<select id="Name"  name="Name" required="required">';
				echo '<option value="">Choose customer</option>';	
								while($row = mysql_fetch_array($result))
								  {
									$Name= $row['Name'];
									echo "<option value='$Name'>$Name</option>";
																
				}
				echo '</select>';
	?>
	</div>
	<div data-role="fieldcontain">
	<select name="venue" id="venue" required="required">
	<option value=""> Choose venue</option>
	<option>Veranda
	<option>Function Hall
	<option>Room #1
	<option>Room #2

	</select></div>
	
	<div data-role="fieldcontain">
	<select name="status" id="status" required="required">
	<option value=""> Status</option>
	<option>Fully Paid
	<option>Initial Deposit
	<option>Inquiry
	</select></div>
	
	<div class="field"><input id="save"  type="submit" name="SubmitOne" data-role="button" data-theme="b" value="Save event" class="submit"></div>
	</div>
	</form>
		
		
			
			</div>

	</div>
</body>
</html>
			

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

<form id="save_rev" name="save_rev" method="post" action="save_rev.php" onSubmit="return check()">	
		<input type="hidden" class="pc_date" name="pc_date"/>
		<input type="hidden" class="pc_time" name="pc_time" />
	<center>	
		<div data-role="fieldcontain">
<input name="TDate" value= "<?php $time_zone = 'Asia/Singapore'; date_default_timezone_set($time_zone); echo date("Y-m-d"); ?>" id="TDate" class="hide"><br>
</div>


	Personal Information<br>
			<input required title="*Please Enter Your Full Name" class="sf" type="text" name="Name" id="Name" placeholder="Complete Name">
	<input title="Your Address. Must Have Brgy. City eg. Salvacion Panabo City." required class="sf"  type="text"   id="Address" name="Address" placeholder="Address">
<input pattern=".{6,}" title="Your Mobile No. Must be 11 digit number.  eg. format 09092967492" required  class="sf" type="text"   name="Contact_no" id="Contact_no" placeholder="Contact_no" maxlength="11" onKeyPress="return isNumberKey(event)">


<div data-role="fieldcontain">
<select name="Company" id="Company" required="required">
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
	<select name="venue" id="venue" required="required">
	<option value=""> Choose venue</option>
	<option>Veranda
	<option>Function Hall
	<option>Room #1
	<option>Room #2

	</select></div>
	
	<div data-role="fieldcontain">
	<input name="Amount" id="Amount" placeholder="Amount" required class="sf" onKeyPress="return isNumberKey(event)"> <br></div>
	
	<div class="field"><input id="save"  type="submit" name="SubmitOne" data-role="button" data-theme="b" value="Save revenue" class="submit"></div>
	</div>
	</form>
		
		
			
			</div>

	</div>
</body>
</html>
			

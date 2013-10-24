<!DOCTYPE html> 
<html> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="css/jquery.mobile.min.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile.min.js"></script>

<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
 
 <script type="text/javascript">
$(document).on('pageinit', function () {

    $("#save_rev").validate({
        rules: {
            Name: "required",
            Address: "required",
			Contact_no: {
				required: true,
					minlength: 11,
					maxlength: 11
				},
				
			Company: "required",
			venue: "required",
			Amount: {
			 required: true,
                maxlength: 4
				
			}
        },
        submitHandler: function (form) { // for demo
            sfkshfjdshfjdsfhd; // for demo
            return false; // for demo
        }
    });

});
</script>
 <style>
label.error { 

	color: red; 
	
}
</style>
 
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
			<input type="text" name="Name" id="Name" placeholder="Complete Name" class="required">
	<input  type="text"   id="Address" name="Address" placeholder="Address" class="required">
<input  type="text"  class="required" name="Contact_no" id="Contact_no" placeholder="Contact_no"  onKeyPress="return isNumberKey(event)">


<div data-role="fieldcontain" >
<select name="Company" id="Company" class="required">
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
	<select name="venue" id="venue" class="required">
	<option value=""> Choose venue</option>
	<option>Veranda
	<option>Function Hall
	<option>Room #1
	<option>Room #2

	</select></div>
	
	
	<input type="text" name="Amount" id="Amount" placeholder="Amount" class="required" > <br></div>

	
	<div class="field"><input id="save"  type="submit" name="SubmitOne" data-role="button" data-theme="b" value="Save revenue" class="submit"></div>
	</div>
	</form>
		
		
			
			</div>

	</div>
</body>
</html>
			

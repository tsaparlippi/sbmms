<!DOCTYPE html> 
<html> 
	<head> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	
	<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
 
</head>
 
 <style>
label.error { 

	color: red; 
	
}
</style>

<body>

<div data-role="page" class="type-home" 
			style="background-image: url('images/bg.jpg'); 
					background-attachment: fixed; 
					background-repeat: repeat; 
					background-size: 100% 100%;">
					
<SCRIPT language=Javascript>
      <!--

      function isNumberKey(evt)

      {

         var charCode = (evt.which) ? evt.which : event.keyCode

         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;	
		    return true;

}
</script>
<script type="text/javascript">
$(document).on('pageinit', function () {

    $("#save_sum").validate({
        rules: {
            year: "required",
           
			}
        },
        submitHandler: function (form) { // for demo
            sfkshfjdshfjdsfhd; // for demo
            return false; // for demo
        }
    });

});
</script>

<div data-role="header" data-position="inline">
				<a href="index.php" data-icon="arrow-l">Back</a>
				<h1>Summary</h1>
				
			</div>

			<div data-role="content">
		<?php include('config1.php'); ?>
		
	
	<center>

<div data-role="fieldcontain" data-position="inline" data-inline="true">
		<form action="custom_summary.php" method="POST" name="save_sum" id="save_sum">
		<div data-role="fieldcontain" data-inline="true">
		<select name="month">
		<option value="1">January</option>
		<option value="2">February</option>
		<option value="3">March</option>
		<option value="4">April</option>
		<option value="5">May</option>
		<option value="6">June</option>
		<option value="7">July</option>
		<option value="8">August</option>
		<option value="9">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option>
		</select></div>
		
		<div data-role="fieldcontain">
<label for="myinput1"> </label><input type="text" name="year" placeholder="Year" required="required" onkeypress="return isNumberKey(event)"  />
</div>
	
		<div class="field"><button id="submit" name="submit" data-role="button" data-theme="b">Proceed</button></div>
		</form>
		
		
		
		</div></div></div></div>
</body>
</html>
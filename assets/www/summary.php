<!DOCTYPE html> 
<html> 
	<head> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	
	
	<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>

 <script type="text/javascript">
$(document).on('pageinit', function () {

    $("#summary").validate({
        rules: {
			month: "required",
            year: "required"
          
			
        },
        submitHandler: function (form) { // for demo
            sfkshfjdshfjdsfhd; // for demo
            return false; // for demo
        }
    });

});
</script>
 
 
</head>

	
</head>
 

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


<div data-role="header" data-position="inline">
				<a href="index.php" data-icon="arrow-l">Back</a>
				<h1>Summary</h1>
				
			</div>

			<div data-role="content">
		<?php include('config1.php'); ?>
		
	
	<center>

<div data-role="fieldcontain" data-position="inline" data-inline="true">
		<form action="custom_summary.php" name="summary" id="summary" method="POST">
	
	<div data-role="fieldcontain" data-inline="true">
		<select name="month" id="month" class="required">
		<option>January
		<option>February
		<option>March
		<option>April
		<option>May
		<option>June
		<option>July
		<option>August
		<option>September
		<option>October
		<option>November
		<option>December
		</select></div>
		
		<div data-role="fieldcontain">
			<input type="text" name="year" placeholder="Year" onkeypress="return isNumberKey(event)" class="required" />
		</div>
	
		<div class="field"><input id="save"  type="submit" name="SubmitOne" data-role="button" data-theme="b" value="Proceed" class="submit"></div>
	</div>
		</form>
		
		
		
		</div></div></div></div>
</body>
</html>
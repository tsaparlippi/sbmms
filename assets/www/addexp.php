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

    $("#save_exp").validate({
        rules: {
            expense: "required",
            cost: "required",
			
        },
        submitHandler: function (form) { // for demo
            sfkshfjdshfjdsfhd; // for demo
            return false; // for demo
        }
    });

});
</script>
 
 
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
			<h1>Add Expense</h1>

		</div>

<div data-role="content" data-theme="c">

<form id="save_exp" name="save_exp" method="post" action="save_exp.php" onSubmit="return check()">	
		<input type="hidden" class="pc_date" name="pc_date"/>
		<input type="hidden" class="pc_time" name="pc_time" />
	<center>	
		<div data-role="fieldcontain">
<input name="date" value= "<?php $time_zone = 'Asia/Singapore'; date_default_timezone_set($time_zone); echo date("Y-m-d"); ?>" id="date" class="hide"><br>
</div>

	
	<div data-role="fieldcontain">
	<input type="text"  name="expense" id="expense" placeholder="Expense" class="required"> <br></div>
	
	
	<div data-role="fieldcontain">
	<input type="text" name="cost" id="cost" placeholder="Amount" onKeyPress="return isNumberKey(event)" class="required"> <br></div>
	
	<div class="field"><input id="save"  type="submit" name="SubmitOne" data-role="button" data-theme="b" value="Save expense" class="submit"></div>
	</div>
	</form>
		
		
			
			</div>

	</div>
</body>
</html>
			

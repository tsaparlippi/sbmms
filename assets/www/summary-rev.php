<!DOCTYPE html> 
<html> 
	<head> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
</head> 
		<body background="images/black.jpg" align="center">		

		<div data-role="page" id="home">
<div data-role="header">
<h1>Summary</h1>
</div>
		<?php include('config1.php'); ?>
		
		
			
		<!-- hide actions for user access level-->
		<?php if($_SESSION['user_type'] != 'User'){ ?>
		
		<?php } ?>

		<form action="custom_summary.php" method="POST">
		<select name="month">
		<option value="0"></option>
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
		</select>
		<select name="year">
		<option value="2010">2010</option>
		<option value="2011">2011</option>
		<option value="2012">2012</option>
		<option value="2013">2013</option>
		<option value="2013">2014</option>
		<option value="2014">2014</option>
		<option value="2015">2015</option>
		<option value="2015">2016</option>
		<option value="2015">2017</option>
		<option value="2015">2018</option>
		<option value="2015">2019</option>
		<option value="2015">2020</option>
		
		</select>
		<input type="submit" name="submit" value="Proceed" />
		</form>
		
		
		
		</div></div></div></div>
</body>
</html>
s<!DOCTYPE html> 
<html> 
	<head> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
</head> 
		
<body>	

<div data-role="page" class="type-home" 
			style="background-image: url('images/bg.jpg'); 
					background-attachment: fixed; 
					background-repeat: repeat; 
					background-size: 100% 100%;">

	<div data-role="header" data-position="inline">
		<a href="index.php" data-icon="arrow-l">Back</a>
			<h1>Summary</h1>
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home">Home</a>
	</div>

		<div data-role="content">
			<?php 
				include('config1.php'); 

					$month = $_POST['month'];
					$year = $_POST['year'];
				

					$revenues = mysql_query("SELECT SUM(Amount) as totalrev FROM guest WHERE month(TDate) = '$month' AND year(TDate) = '$year' ORDER BY TDate ASC") or die(mysql_error());  
					$expenses = mysql_query("SELECT SUM(cost) as totalexp FROM expenses WHERE month(date) = '$month' AND year(date) = '$year' ORDER BY date ASC") or die(mysql_error());  
					
					$rev = mysql_fetch_array($revenues);
					$totalrev = $rev['totalrev']; 
					
					$exp = mysql_fetch_array($expenses);
					$totalexp = $exp['totalexp']; 

					$income = $totalrev - $totalexp;

			?>		
	
		
	<center>
		
				
			<br/><br/>

	<ul data-role="listview" data-inset="true">
	
	<li>
	<h2>Total Revenues</h2>
	<p class="ui-li-aside"> <font size="4" color="green"><?php echo $totalrev; ?> </font></p>
	</li>
	
	<li>
	<h2>Total Expenses</h2>
	<p class="ui-li-aside"> <font size="4" color="green"><?php echo $totalexp; ?></font> </p>
	</li>
	
	<li>
	<h2>Income</h2>
	<p class="ui-li-aside"><font size="4" color="green"><?php echo $income ?> </font></p>
	</li>
	
	</ul>
</center>
		
		</div></div>
</body>
</html>
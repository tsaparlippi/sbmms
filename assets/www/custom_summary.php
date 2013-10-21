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
		
			<div id="dt_example" style="width: 860px;">
				<div id="container" style="width: 8">
				<div class="demo_jui" style="width: 860px;">
<tbody>
			
			<br/><br/><br/>
			<center>
	<div class="ui-grid-a ui-responsive">
    <div class="ui-block-a"><div class="ui-body ui-body-d" style="height:30px"><font size="5px" align="center">Total Revenues</font></div></div>
    <div class="ui-block-b"><div class="ui-body ui-body-d" style="height:30px"><font size="5px" align="center"><?php echo $totalrev; ?></font></div></div>
    <div class="ui-block-a"><div class="ui-body ui-body-d" style="height:30px"><font size="5px" align="center">Total Expenses</font></div></div>
    <div class="ui-block-b"><div class="ui-body ui-body-d" style="height:30px"><font size="5px" align="center"><?php echo $totalexp; ?></font></div></div>
    <div class="ui-block-a"><div class="ui-body ui-body-d" style="height:30px"><font size="5px" align="center">Income</font></div></div>
    <div class="ui-block-b"><div class="ui-body ui-body-d" style="height:30px"><font size="5px"><?php echo $income; ?></font></div></div>
	</div>	</center>
				
				<!-- hide actions for user access level-->
				<?php if($_SESSION['user_type'] != 'User'){ ?>
				<!-- hide actions for user access level-->
				 
					
					</form>
					<?php } ?>
				</td>
				
				</tr>
	</tbody>

</center>
		
		</div></div></div></div>
</body>
</html>
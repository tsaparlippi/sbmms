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

		
		<center>
		
			<div id="dt_example" style="width: 860px;">
				<div id="container" style="width: 8">
				<div class="demo_jui" style="width: 860px;">
		
	<tbody>
			<?php $rev = mysql_query("SELECT SUM(cost) as totalcost FROM revenues") or die(mysql_error());  ?>
			<?php WHILE($revs = mysql_fetch_array($rev)){
				$totalcost = $revs['totalcost']; }?>
			
			<?php $exp = mysql_query("SELECT SUM(cost2) as totalexp FROM expenses") or die(mysql_error()); ?>
			<?php WHILE($exps = mysql_fetch_array($exp)){
				$totalexp = $exps['totalexp']; }
				?>

			<tr class="gradeA del<?php echo $id;?>">
			<form action="editrev.php" method="POST">
			<br/><br/><br/>
			<center>
	<div class="ui-grid-a ui-responsive">
    <div class="ui-block-a"><div class="ui-body ui-body-d" style="height:60px"><font size="5px" align="center">Total Revenues</font></div></div>
    <div class="ui-block-b"><div class="ui-body ui-body-d" style="height:60px"><font size="5px" align="center"><?php echo $totalcost; ?></font></div></div>
    <div class="ui-block-a"><div class="ui-body ui-body-d" style="height:60px"><font size="5px" align="center">Total Expenses</font></div></div>
    <div class="ui-block-b"><div class="ui-body ui-body-d" style="height:60px"><font size="5px" align="center"><?php echo $totalexp; ?></font></div></div>
    <div class="ui-block-a"><div class="ui-body ui-body-d" style="height:60px"><font size="5px" align="center">Income</font></div></div>
    <div class="ui-block-b"><div class="ui-body ui-body-d" style="height:60px"><font size="5px" align="center"><?php echo $totalcost-$totalexp; ?></font></div></div>
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
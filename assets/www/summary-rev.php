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
		<form>
<fieldset data-role="controlgroup" data-type="horizontal">
    <select name="month" id="month">
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
    <select name="year" id="year">
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
</fieldset>
		<input type="submit" name="submit" value="Proceed" class="btn btn-inverse"/>
		</form>
		</div>
		
		<center>
		
			<div id="dt_example" style="width: 860px;">
				<div id="container" style="width: 8">
				<div class="demo_jui" style="width: 860px;">
		
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="width: 460px;">
			<thead>
		<tr>
			<th style="width:100px;">Date</th>
			<th>Event</th>
			<th>Customer</th>
			<th>Amount</th>
			
		</tr>
	</thead>
	<tbody>
			<?php $rev = mysql_query("SELECT * FROM revenues") or die(mysql_error());  ?>
			<?php WHILE($revs = mysql_fetch_array($rev)){
				$id = $revs['exp_id'];
				$control = $revs['exp_id'];
				$customer= $revs['customer'];
				$date = $revs['date'];
				$event= $revs['event'];
				$cost = $revs['cost'];
				
				?>
			<tr class="gradeA del<?php echo $id;?>">
			<form action="editrev.php" method="POST">
				
				<td align="center"><?php echo $date; ?></td>
				<td align="center"><?php echo $event; ?></td>
				<td align="center"><?php echo $customer; ?></td>
				<td align="right"><?php echo $cost; ?></td>
				
				<!-- hide actions for user access level-->
				<?php if($_SESSION['user_type'] != 'User'){ ?>
				<!-- hide actions for user access level-->
				 
					
					</form>
					<?php } ?>
				</td>
				
				</tr>
			<?php } ?>
	</tbody>
</table>

</center>
		
		</div></div></div></div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<link href="css/index.css" media="screen" rel="stylesheet" type="text/css" />

	<link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/slide.css" media="screen" rel="stylesheet" type="text/css" />
	
	<link rel='stylesheet' href='css/black-tie/jquery-ui-1.8.24.custom.css' />
	
	<script type='text/javascript' src='js/jquery-1.8.2.min.js' ></script>
	<script type='text/javascript' src='js/jquery-ui-1.8.24.custom.min.js' ></script>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

<script type="text/javascript">


</script>
		
<body background="images/black.jpg">
	
	<div class="leftlogo">
	<img src="images/logo.png">
	</div>

	<center>
	
		<div class="menu-name">
		<img src="images/summary.png">
		
		<div class="summary-buttons">
		<a href="summary-rev.php"><button class="btn">Revenue</button></a> &nbsp;&nbsp;<font size="3" color="#f66300"><b>|</b></font>&nbsp;&nbsp; 
		<a href="summary-exp.php"><button class="btn btn-info">Expenses</button></a>  &nbsp;&nbsp;<font size="3" color="#f66300"><b>|</b></font>&nbsp;&nbsp; 
		<a href="summary-inc.php"><button class="btn btn-danger">Income</button></a>
		</div>
	
		</div>
		
		<?php include('config1.php'); ?>
		
	</center>
	
		<div class="menubox">
		<br><br><br><br><br><br>
		<br><br><br><br><br>
		
		&nbsp;&nbsp;<a href="index.php"><button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Home</b></font></button></a><br>
		&nbsp;&nbsp;<a href="rev-view.php"><button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Revenues</b></font></button></a><br>
		&nbsp;&nbsp;<a href="exp-view.php"><button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Expenses</b></font></button></a><br>
		&nbsp;&nbsp;<a href="summary-rev.php"><button class="btn" style="width:200px;"><font color="#000"><b>Summary</b></font></button></a><br>
		&nbsp;&nbsp;<button class="btn btn-warning" style="width:200px;"><font color="#000"><b>File Management</b></font></button><br>
		&nbsp;&nbsp;<button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Booking Schedule</b></font></button><br>
		&nbsp;&nbsp;<button class="btn btn-warning" style="width:200px;"><font color="#000"><b>Customer's Database</b></font></button>
		
		</div>
		
		<div class="mainbox">
		<br>
		<div class="slightleft">
		<b>	<font size="4" color="#000"><b>Revenue List</b></font> 
			
		<!-- hide actions for user access level-->
		<?php if($_SESSION['user_type'] != 'User'){ ?>
		
		<?php } ?>
		<!-- hide actions for user access level-->
		
		| <!-- call for pdf print --> <a href="mpdf51/examples/revenues_pdf.php"><b><font color="#fff">Print</font></b></a>
		<form action="mpdf51/examples/custom_revenues.php" method="POST"><br>
		<div class="color2"><label><b>View by month:</b></label></div>
		<select name="month" style="width:100px;">
	
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
		<select name="year" style="width:80px;">
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
		<input type="submit" name="submit" value="Proceed" class="btn btn-inverse"/>
		</form>
		</div>
		<center>
		
			<div id="dt_example" style="width: 860px;">
				<div id="container" style="width: 8">
				<div class="demo_jui" style="width: 860px;">
		
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="width: 860px;">
			<thead>
		<tr>
			<th style="width:100px;">Date</th>
			<th>Event</th>
			<th>Customer</th>
			<th style="width:400px;">Particulars</th>
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
				$particulars = $revs['particulars'];
				$cost = $revs['cost'];
				
				?>
			<tr class="gradeA del<?php echo $id;?>">
			<form action="editrev.php" method="POST">
				
				<td align="center"><?php echo $date; ?></td>
				<td align="center"><?php echo $event; ?></td>
				<td align="center"><?php echo $customer; ?></td>
				<td align="center"><?php echo $particulars; ?></td>
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
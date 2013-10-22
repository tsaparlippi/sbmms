<!DOCTYPE html> 
<html> 
	<head> 

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>

	</head> 

<body>

	<div data-role="page" class="type-home"  data-icon="loading"
			style="background-image: url('images/bg.jpg'); 
					background-attachment: fixed; 
					background-repeat: repeat-y; 
					background-size: 100% 100%;">

		<div data-role="content" id="btnLoad">	
		
	
		<br><br>

			<center>
				<img src="images/logo.jpg" height="130px" width="275px">
			</center>
			
		<br>
			
			<div class="content-primary">

				<ul data-role="listview" data-inset="true" data-theme="a" >
					<li><a href="rev-view.php">Revenues</a></li>
					<li><a href="exp-view.php">Expenses</a></li>
					<li><a href="summary.php">Summary</a></li>
					<li><a href="bookingsched.php" rel="external">Booking Schedule</a></li>
					<li><a href="res-view.php">Event's Schedule</a></li>
					<li><a href="reservation.php" rel="external">Reservation</a></li>
					<li><a href="cus-view.php">Customer's Database</a></li>
				</ul>
				
			</div><!-- /content-primary -->
			
		</div><!-- /content -->

	</div><!-- /page -->

</body>
</html>
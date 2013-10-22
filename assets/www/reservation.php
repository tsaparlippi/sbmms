
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<link rel="stylesheet" href="css/jquery.mobile.datebox.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	
	
	<script type="text/javascript" src="js/jqm-datebox.core.js"></script>   				
	<script type="text/javascript" src="js/jqm-datebox.mode.calbox.min.js"></script>

<script type="text/javascript">
	$('#start').live('change', function() {
    $('#end').val($('#start').val());
    var temp = new Date(),
        diff = parseInt(($('#start').data('datebox').theDate - temp) / ( 1000 * 60 * 60 * 24 ));
        diffstrt = (diff * -1)-1; // If you want a minimum of 1 day between, make this -2 instead of -1
        diffend = diff + 32; // Why 11 instead of 10?  No idea...

    $('#end').data('datebox').options.minDays = diffstrt;
    $('#end').data('datebox').options.maxDays = diffend;

});

</script>

<div data-role="page" class="type-home" 
			style="background-image: url('images/bg.jpg'); 
					background-attachment: fixed; 
					background-repeat: repeat; 
					background-size: 100% 100%;">
					
					<div data-role="header" data-position="inline">
			<a href="index.php" data-icon="arrow-l" rel="external" data-role="button">Back</a>
			<h1>Reservation</h1>
			<a href="res-view.php"  data-role="button" data-theme="a" data-icon="plusthick"  data-inline="true" rel="external">Schedule</a>
		</div>

	<center>

<div data-role="content">
			
	
			
			<div data-role="fieldcontain">
			
			<form action="pop-uponsubmit.php" data-rel="dialog"  data-transition="pop" method="post" target="_self" rel="external">
			
			
							
								<input name="start" type="date" data-role="datebox" id="start" required title="Please Input Date of Arrival" class="ed"    placeholder="datestart"
										data-options='{"mode": "calbox", "afterToday": true, "maxDays": 31}' /><br><br>

						
							<input name="end" type="date" data-role="datebox" id="end" required title="Please Input Date of Arrival" class="ed"  placeholder="dateend"
										data-options='{"minDays": 15, "maxDays": -15, "mode": "calbox"}'/> <br><br>
										
				
										
		
					<input type="submit"  data-role="button" data-theme="b" value="Check Availability" rel="external">
			</form>
				
			</div>
			
		</center>	
			</div>
			
							
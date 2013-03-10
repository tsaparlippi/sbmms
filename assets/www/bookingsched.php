<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>

	
	<script type='text/javascript' src='js/jquery-1.8.2.min.js' ></script>
	<script type='text/javascript' src='js/jquery-ui-1.8.24.custom.min.js' ></script>
	
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="facebox/facebox.js" type="text/javascript"></script>
	
	 <link href="css/calendar/css/smoothcalendar.css" rel="stylesheet" type="text/css" />
	    <script type="text/javascript" src="js/calendar/mootools-1.2.1-core-nc.js"></script>
	    <script type="text/javascript" src="js/calendar/smoothcalendar.js"></script>
	    
		<script type="text/javascript">
               
            window.addEvent('domready', function(){
                 var date = new Date();
                 var smoothCalendar = new SmoothCalendar("calendar", date);
            });

	    </script>

			<script type="text/javascript">
				function displayTime()
					{
					var localTime = new Date();
					//this one will give you the GMT offset
					var timezone = localTime.getTimezoneOffset()/60 * (-1);
					var div = document.getElementById("div1");
					div.innerText = "GMT" + timezone;
					}
		</script>
		
		<style type="text/css">
	        #calendar {
                width:300px;
                margin: 10px auto;	        
            }
	    </style>
 
	<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/loading.gif',
        closeImage   : 'facebox/closelabel.png'
      })
    })
	</script>
	
	<style type="text/css" title="currentStyle">
		
			@import "css/demo_table_jui.css";
			@import "js/smoothness/jquery-ui-1.8.4.custom.css";
		</style>
		
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				oTable = $('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});
			} );
		</script>
		
<body background="images/black.jpg">

		
		<div class="summary-buttons1">
		
		<center><a href="event-list.php"><button class="btn btn-info">Event Lists</button></a><font size="3" color="#f66300"></font> 
		<a href="add-event.php"><button class="btn btn-danger">Add Event</button></a>
		</div>
	
		</div>
		
		<?php include('config1.php'); ?>
		
	</center>
	
	

		<div id="wrap">

            <div id="calendar">
			
			<?php include("config1.php"); $schedules = mysql_query("SELECT * FROM schedules") or die(mysql_error());  ?>
			<?php include("config1.php"); WHILE($sched = mysql_fetch_array($schedules)){
				$event = $sched['event'];
				$date = $sched['date'];
				$time = $sched['time'];
				$customer = $sched['customer'];
				$venue = $sched['venue'];
				$newDate = date('M d Y', strtotime($date));
				?>
				<div style="display:none;" class="<?php echo $newDate;  ?>" title="<?php echo $event; ?>">
                    <em><?php echo $time; ?></em><br>
					<p><?php echo $customer; ?></p>
					<p><?php echo $venue; ?></p>
					
                </div>
				<?php } ?>
			


			</div>
			 <div id="div1"></div>
			</div>
	
			</div>

			</div>
		
			</div>
</body>
</html>
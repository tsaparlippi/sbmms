

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="validation.js" type="text/javascript"></script>
<script src="ex1.js" type="text/javascript"></script>
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <style type="text/css" media="all">@import "css/timepicker/timePicker.css"</style>
  <script type="text/javascript" src="js/timepicker/jquery.timePicker.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

   <script type="text/javascript">
  jQuery(function() {
    // 02.00 AM - 03.30 PM, 15 minutes steps.
    $(".time").timePicker({
  startTime: "02.00",  // Using string. Can take string or Date object.
  endTime: new Date(0, 0, 0, 15, 30, 0),  // Using Date object.
  show24Hours: false,
  separator:'.',
  step: 15});
    
    
    
  });
  </script>
<script type="text/javascript" charset="utf-8">
jQuery(function($){
$(".date").datepicker({

    showOn: "both",
    buttonImage: "images/calendar.png",
    buttonImageOnly: true,
    yearRange: '2012:2050',
    changeYear: true
});
});
</script>


<script type="text/javascript">
jQuery(document).ready( function () {

// using live() will bind the event to all future
// elements as well as the existing ones
jQuery('.remove_this').live('click', function() {
    jQuery(this).parent().remove();
    return false;
});
	
jQuery('#save_sched').submit(function(e){
var event = jQuery('.event').val();
var date = jQuery('.date').val();
var time = jQuery('.time').val();
var venue = jQuery('.venue').val();
var customer = jQuery('.customer').val();
var status = jQuery('.status').val();

    e.preventDefault();
if (event == '$('.event')' && date == '$('.date')' && time == '$('.time')' && venue == '$('.venue')' && customer == '$('.customer')' && status == '$('.status')'){	
    var formData = jQuery(this).serialize();
    jQuery.ajax({
        type: 'POST',
        url:  'save_sched.php',
        data: formData,
        success: function(msg){
            showNotification({
message: "Event Successfully Added",
type: "success", // type of notification is error/success/warning/information,
autoClose: true, // auto close to true
duration: 5 // message display duration
});

<!--redirection -->
		 var delay = 3000;
		setTimeout(function(){ window.location = 'calendar_view.php';}, delay);  
<!--redirection end -->	
        }
    });
} else {
alert('All fields are required!');
return false;
}		
});
});

</script>


<title>Add Schedule</title>
</head>
<br>
<body class="modify_user standard">
<div class="wrapper">

	<div class="header">

	</div>

	<div class="right_nav">
	

	</div>
	<div class="content">
	<div class="title_page">
	</div>
	
	<div class="actions">

	<div class="form label-inline uniform" id="shadow" style="width: 700px; margin:0 auto;" >

	<form id="save_sched" name="save_sched" method="post" action="save_sched.php"">	
		<input type="hidden" class="pc_date" name="pc_date"/>
		<input type="hidden" class="pc_time" name="pc_time" />	
		
<tbody align=""><tr><td class="label"><label for="date"><font face="Orator Std" color="#FFFFFF" size="4"><b>Date:</label></td><td><input type="date" id="date" name="date"/><font color="CCCCCC">&nbsp;&nbsp;&nbsp;[yyyy-mm-dd]</font></td></tr>
	<div class="field"><label>Event</label> 
	<select id="event" name="event" value="Acquaintance Party">
	<option>Acquaintance Party
	<option>Anniversary
	<option>Baptism
	<option>Birthday
	<option>Christmas Party
	<option>Conference
	<option>Debut
	<option>Despidida Party
	<option>Engagement Party
	<option>Halloween Party
	<option>Overnight
	<option>Pre-Nuptial
	<option>Reunion
	<option>Seminar
	<option>Wedding
	</select></div>
	
	<div class="inc">
	<tbody align=""><tr><td class="label"><label for="customer"><font face="Orator Std" color="#FFFFFF" size="5"><b>Customer: </label></td><td>


 <?php
			   include('config1.php');
		$result = mysql_query("SELECT * FROM customerdatabase");
								
				echo '<select id="customer"  name="customer">';
				echo '<option value=""></option>';	
								while($row = mysql_fetch_array($result))
								  {
									$name= $row['name'];
									echo "<option value='$name'>$name</option>";
																
}
echo '</select>';
					?>

					<a rel="facebox" href=cus-add.php?id=' . $row3["product_id"] . '><img alt="New Customer" src="images/add.gif" width="80px" height="40px" /></a>
									
									
													
	</div>
	
	<div class="field"><label>Time </label> 
	<select id="time" name="time">
	<option>12:00 am
	<option>12:30 am
	<option>1:00 am
	<option>1:30 am
	<option>2:00 am
	<option>2:30 am
	<option>3:00 am
	<option>3:30 am
	<option>4:00 am
	<option>4:30 am
	<option>5:00 am
	<option>5:30 am
	<option>6:00 am
	<option>6:30 am
	<option>7:00 am
	<option>7:30 am
	<option>8:00 am
	<option>8:30 am
	<option>9:00 am
	<option>9:30 am
	<option>10:00 am
	<option>10:30 am
	<option>11:00 am
	<option>11:30 am
	<option>12:00 pm
	<option>12:30 pm
	<option>1:00 pm
	<option>1:30 pm
	<option>2:00 pm
	<option>2:30 pm
	<option>3:00 pm
	<option>3:30 pm
	<option>4:00 pm
	<option>4:30 pm
	<option>5:00 pm
	<option>5:30 pm
	<option>6:00 pm
	<option>6:30 pm
	<option>7:00 pm
	<option>7:30 pm
	<option>8:00 pm
	<option>8:30 pm
	<option>9:00 pm
	<option>9:30 pm
	<option>10:00 pm
	<option>10:30 pm
	<option>11:00 pm
	<option>11:30 pm
	</select>
	</div>
	<div class="field"><label>Venue </label> 
	<select id="venue" name="venue" value="Room #1">
	<option>Room #1
	<option>Room #2
	<option>Room #3
	<option>Room #4
	<option>Function Hall
	<option>Veranda
	</select></div>
	
	
	
	

	

	<div class="field"><button id="save" name="SubmitOne"><font color="000000">Save Changes</font></button></div>
	</form>
	</div>
	
	</div>

</div>
	
</body>
</html>
<script type="text/javascript">
jQuery(document).ready( function () {
/* amo ni*/
var myDate = new Date();
var pc_date = (myDate.getMonth()+1) + '/' + (myDate.getDate()) + '/' + myDate.getFullYear();
var pc_time = myDate.getHours()+':'+myDate.getMinutes()+':'+myDate.getSeconds();
jQuery(".pc_date").val(pc_date);
jQuery(".pc_time").val(pc_time);
/*asta d*/

jQuery('.date').change( function(){
	var input = jQuery(this).val();
	today = new Date();
	
    expo = new Date(input);
    var one_day=1000*60*60*24
    var daysLeft = Math.ceil((expo.getTime()-today.getTime())/(one_day));
     if(daysLeft === 0){
         // today
         alert("today");
     }else if(daysLeft < 0){
         alert('passed');
		 jQuery(this).val('');
     }

});

});
</script>
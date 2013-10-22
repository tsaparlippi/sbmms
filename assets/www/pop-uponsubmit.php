<!DOCTYPE html> 
<html> 
	<head> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	
	  <!-- Number only -->
    <SCRIPT language=Javascript>
     
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->onKeyPress="return isNumberKey(event)"
   </SCRIPT>
		
		
	     
     <!--Check all the checkbox -->
<script type="text/javascript">
function toggleChecked(status) {
$(".checkbox").each( function() {
$(this).attr("checked",status);
})
}
</script>
    <!--END Check all the checkbox -->

<script type="text/javascript">
    $(function() {
        $('#Amount').hide();
        $('#Payment').on('change', function(event) {
            var opt = this.options[ this.selectedIndex ];
            var picked_blue = $(opt).text().match(/Payment/i);
            if(picked_blue) {
                $('#Amount').show();
            } else {
                $('#Amount').hide();
            }
			
		
        });
    });

	</script>

	</head>
	
<body>

<div data-role="dialog">

<div data-role="header" data-position="inline">
			<a href="Reservation.php" rel="external" data-icon="arrow-l">Back</a>
			<h1>Reservation</h1>
		
			</div>

			<div data-role="content">

			
<?php
include("include/mysql_connect.php");//Connect to mysql
 ?><?php 
 
  $start=$_POST['start'];
  $end=$_POST['end'];

$dstart = new DateTime($start);                                       ///////////////////////////////
$dend = new DateTime($end);                                          //
$d1 = $dstart->format('Y-m-d');                                      //
$d2 = $dend->format('Y-m-d');                                        //   GET THE DAY INTERVAL BETWEEN
                                                                     //
$difference = abs(strtotime($d1)-strtotime($d2));                    //   Date_start and Date_end
                                                                     //
$difference/= 3600*24;                                               //
$difference=number_format($difference);                              //
$gabie=$difference;
 $dayinterval=$gabie;                                                 ///////////////////////////////              
    
   $st = date('M-d-Y', strtotime($start));
     $en = date('M-d-Y', strtotime($end));
 // Checking the available rooms
 
  $query2 = mysql_query("select * from room,room_type where room.Type_id=room_type.Type_id and Room_no NOT IN 
                        (select Room_no from reservation,reservation_info 
						 where 
						 Date_start<='$end' and Date_end>='$start' 
						 and
                         reservation.Guest_id=reservation_info.Guest_id)");
 
 
 

  $thevacantroom = mysql_num_rows($query2); // count the number of vacant room

if( $thevacantroom>0){	
	?><form action="try3.php"  onsubmit="return ValidateForm1(this)" id="form" method="post" target="_self">
		<center><div data-role="fieldcontain">
			<input name="TDate" value= "<?php $time_zone = 'Asia/Singapore'; date_default_timezone_set($time_zone); echo date("Y-m-d"); ?>" id="TDate" class="hide"><br>
			Personal Information<br><br>
			<input required title="*Please Enter Your Full Name" class="sf" type="text" name="name" placeholder="Complete Name"><br>
			<input title="Your Address. Must Have Brgy. City eg. Salvacion Panabo City." required class="sf"  type="text"   name="Address" placeholder="Address"><br>
			<input pattern=".{6,}" title="Your Mobile No. Must be 11 digit number.  eg. format 09092967492" required  class="sf" type="text"   name="Contact_no" placeholder="Contact_no" maxlength="11" onKeyPress="return isNumberKey(event)"><br>
			<select name="Company" placeholder="Company" required="required">
				<option required title="*Please Enter Company" class="sf"  value=""> Choose event</option>
				<option >Acquaintance Party
				<option>Anniversary
				<option>Baptism
				<option>Birthday
				<option>Christmas Party
				<option>Conference
				<option>Debut
				<option>Despedida Party
				<option>Engagement Party
				<option>Halloween Party
				<option>Overnight
				<option>Pre-Nuptial
				<option>Reunion
				<option>Seminar
			<option>
			</select><br>
			<select name="Payment" placeholder="Payment" id="Payment" required="required">
				<option required title="*Please Enter Status" class="sf"  value=""> Choose status</option>
				<option value="Full Payment">Full Payment </option>
				<option value="Initial Payment">Initial Payment </option>
				<option value="Inquiry">Inquiry </option>			
			</select><br>

			<input type="text" name="Amount" id="Amount" placeholder="Amount" maxlength="4" onKeyPress="return isNumberKey(event)"><br><br>
					
			<input type="submit" data-role="button" data-theme="b" id="button1" value="Reserve" /></div></center><?php

	 if ($thevacantroom==1){
		 $only=$thevacantroom.'   ROOM Only.'; 
		 }
		 else{
			 $only=$thevacantroom.'   ROOMS';
			 
			 }
			 if ($gabie==1){
				 $gabie=$gabie.'   NIGHT  ';
			 }
			 else{
				  $gabie=$gabie.'   NIGHTS  ';
			 }
	 
	 echo '<div date-role="fieldcontain"> As of <font color="green"><b>'.$st.' </b></font> to <font color="green"><b>'.$en.'</b></font> '.$gabie.'   Vacant  is <b>'.$only.'</b></div><br><br>';
	
while($rows2 = mysql_fetch_array($query2))
  {
	  echo '<div date-role="fieldcontain">';
      echo '<input type="hidden" name="dayinterval" value="'. $dayinterval.'">';
      echo '<input type="hidden" name="sta" value="'.$start.'">';
	  echo '<input type="hidden" name="en" value="'.$end.'">';
	  echo '<input type="hidden" name="start" value="'.$start.'">';
	  echo '<input type="hidden" name="end" value="'.$end.'">';
	  echo '</div>';
	  echo '<div date-role="fieldcontain">';
	  echo '<fieldset data-role="controlgroup" id="pay" >';
	  echo '<input class="checkbox" title="pili lng" id="checkbox" type="checkbox" value="'.$rows2['Room_no'].'" name="multi[]" >';
	  echo '<label for="checkbox" id="pay" style="margin-top:-35px"> ';
	  ?> <img src="<?php  echo $rows2['image']  ?>" style="width:50px;height:50px"  /> <?php
	  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P'.$vacant2=$rows2['Rate'].' ';
	   echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$vacant2=$rows2['Room_type'];
	   echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$rows2['Bed'].'  Bed(s)';
	   echo '&nbsp;&nbsp;'.$rows2['Description'].'';
      echo '</fieldset></div><br></label>	';
   }echo '</form>';
echo '</div>';

  
}else  { //IF NO VACANT ROOM EXECUTE Below
		echo '<div data-role="fieldcontain"><td  style=" text-align:center;color:#red; font-size:24px">No Vacancy from <b>'. $st.'</b> To  <b>'.$en.' Please Try Again.</b>  </td>';  echo "</tr></div>";
		}

		mysql_close();//Closing MYSQL connection
		
  ?>
  
  </div> </div>
  
  </html>

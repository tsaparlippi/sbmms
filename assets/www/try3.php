<!DOCTYPE html> 
<html> 
	<head> 

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	

<div data-role="dialog">

		
			

			<div data-role="content">


<?php 
include('include/mysql_connect.php');

      $start=$_POST['start'];
      $end=$_POST['end'];
      $check=$_POST['multi'];
      $sta=$_POST['sta'];
	  $en=$_POST['en'];
	  $TDate=$_POST['TDate'];
	  $name=$_POST['name'];
	  $Company=$_POST['Company'];
	  $Address=$_POST['Address'];
	  $Contact_no=$_POST['Contact_no'];
	  $Payment=$_POST['Payment'];
	  $Amount=$_POST['Amount'];
	  $billstat=0;
	  $status='active';
	  $haha=$_POST['dayinterval'];
	  $N=count($check);//COUNT THE QUANTITY OF ROOM(S) USER CHOOSE
			
if($N=='' || $N==0){ // IF THE USER LEAVE THE CHECKBOX EMPTY
						
                     echo  '<center><div data-role="fieldcontain"><b>PLEASE SELECT VENUE.</b> <br>
					 <a href="#" data-role="button" data-theme="b" data-rel="back">Okay</a></div></center>';
                     exit();
}
			
else{	 
  
	  for($i=0; $i < $N; $i++){

		  $result = mysql_query("SELECT * FROM room where Room_no='$check[$i]'");
		  while($row = mysql_fetch_array($result)){
			 echo  $rn=$row['Room_no'];

	}//END WHILE
    }//END FOR LOOP
	

   $s=$_POST['start'];
   $e=$_POST['end'];
        mysql_query("INSERT INTO guest ( TDate, Name, Company, Address, Contact_no, Payment, Amount, Status, Quantity_reserve	,Nights)
                     VALUES
                    ('$TDate', '$name','$Company','$Address','$Contact_no', '$Payment', '$Amount', '$status','$N','$haha')");
					
					$reg=mysql_insert_id();//Getting the next autoincrement of Guest_id in table guest 
   
	
	    mysql_query("INSERT INTO reservation (Guest_id,Date_start,Date_end) VALUES ('$reg','$start','$end')");
		
		$e=$_POST['multi'];
   $N1=count($e);
   for($ia=0; $ia < $N1; $ia++){//INSERTING MULTIPLE ROOM NUMBERS INTO ONE GUEST ID 
   
   
   $result = mysql_query("SELECT * FROM room where Room_no='$check[$ia]'");
		  while($row = mysql_fetch_array($result)){
			  $rn=$row['Room_no'];
			
	  } 
    
 
  mysql_query("INSERT INTO  reservation_info(Guest_id,  Room_no) VALUES ('$reg','$rn')");
  $result2 = mysql_query("SELECT sum(Rate) FROM room where Room_no='$check[$ia]'");
		  while($row2 = mysql_fetch_array($result2)){
			   $bill+=$row2['sum(Rate)']*$haha;/*Total Bill Computation sum(roomrate)from room number you check multiple by day(s) interval */
			
	  } 
	 
  }//END FOR LOOP 
  
 
    mysql_query("INSERT INTO  payments(Guest_id,  Total_charges, Billing_status) VALUES ('$reg','$bill','$billstat')");
	
	 $start=''; $end='';
			
?>
	
	   <script>
	window.location.href="Reservation.php";
	 </script>
  <?php }
  
  mysql_close();//Closing MYSQL connection
  ?>  
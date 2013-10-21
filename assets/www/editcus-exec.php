<?php
session_start();

include('config1.php');
$userid = $_POST['userid'];
$Name=$_POST['Name'];
$Contact_no=$_POST['Contact_no'];

mysql_query("UPDATE guest SET Name='$Name', Contact_no='$Contact_no' WHERE Guest_id='$userid'");
header("location: cus-view.php");
mysql_close($con);
?> 
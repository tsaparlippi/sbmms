<?php
session_start();

include('config1.php');
$Guest_id = $_POST['Guest_id'];
$Name=$_POST['Name'];
$Company=$_POST['Company'];
$Address=$_POST['Address'];
$Contact_no=$_POST['Contact_no'];
$Payment=$_POST['Payment'];
$Amount=$_POST['Amount'];

mysql_query("UPDATE guest SET Name='$Name', Company='$Company', Address='$Address', Contact_no='$Contact_no', Payment='$Payment', Amount='$Amount' WHERE Guest_id='$Guest_id'");
header("location: res-view.php");
mysql_close($con);
?> 
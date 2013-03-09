<?php
session_start();

$con = mysql_connect("localhost","root","") or die("Could not connect database");
mysql_select_db("sbms", $con) or die("Could not select database");

$date=$_POST['date'];
$name=$_POST['name'];
$company=$_POST['company'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$fblink=$_POST['fblink'];

mysql_query("INSERT INTO customerdatabase (date, name, company, address, contactnumber, facebooklink) VALUES('$date', '$name', '$company', '$address', '$contact', '$fblink')");
	
header("location: rev-add.php");
?>
<?php
session_start();
include('config1.php');

$Guest_id = $_POST['Guest_id'];
$TDate = $_POST['TDate'];
$name= $_POST['name'];
$Address= $_POST['Address'];
$Contact_no= $_POST['Contact_no'];
$Company = $_POST['Company'];
$venue = $_POST['venue'];
$Amount = $_POST['Amount'];
	
mysql_query("INSERT INTO guest (TDate, Name, Address, Contact_no, Company, venue, Amount) VALUES('$TDate', '$name', '$Address', '$Contact_no','$Company', '$venue','$Amount')"); 

header("location: rev-view.php");
			?>

<?php
session_start();
include('config1.php');

$Guest_id = $_POST['Guest_id'];
$TDate = $_POST['TDate'];
$Name= $_POST['Name'];
$Company = $_POST['Company'];
$venue = $_POST['venue'];
$Amount = $_POST['Amount'];
	
mysql_query("INSERT INTO guest (TDate, Name, Company, venue, Amount) VALUES('$TDate', '$Name', '$Company', '$venue','$Amount')"); 

header("location: rev-view.php");
			?>

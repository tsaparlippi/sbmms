<?php
session_start();
include('config1.php');

$id = $_POST['id'];
$event = $_POST['event'];
$date = $_POST['date'];
$time = $_POST['time'];
$customer = $_POST['customer'];
$venue = $_POST['venue'];
$pc_date = $_POST['pc_date'];
$pc_time = $_POST['pc_time'];
	
mysql_query("INSERT INTO schedules (event, date, time, customer, venue) VALUES('$event', '$date', '$time', '$customer', '$venue')"); 

header("location: add_schedule.php");
			?>

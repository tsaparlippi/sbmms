<?php
session_start();
include('config1.php');

$id = $_POST['id'];
$date = $_POST['date'];
$expense = $_POST['expense'];
$cost = $_POST['cost'];
	
mysql_query("INSERT INTO expenses (date, expense, cost) VALUES ('$date', '$expense','$cost')"); 

header("location: exp-view.php");
			?>

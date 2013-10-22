<?php
session_start();

include('config1.php');
$userid = $_POST['userid'];
$name=$_POST['name'];
$contactnumber=$_POST['contactnumber'];

mysql_query("UPDATE customerdatabase SET name='$name', contactnumber='$contactnumber' WHERE id='$userid'");
header("location: cus-view.php");
mysql_close($con);
?> 
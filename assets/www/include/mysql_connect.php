<?php
if(function_exists("date_default_timezone_set") and function_exists("date_default_timezone_get"))
@date_default_timezone_set(@date_default_timezone_get());
?>
<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("sbms") or die(mysql_error());


 ?>
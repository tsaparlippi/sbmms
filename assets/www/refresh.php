<?php
   mysql_connect("localhost","root","");
   mysql_select_db("sbms") or die("Could not select database");

   $query = "UPDATE FROM revenues";
   $result = mysql_query($query);
  
?>
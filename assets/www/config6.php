<?php
// Initiate the connection
$conn = pg_connect('dbname=<database>');
/*
<database> is the name of your database. It is assumed to reside on the server you are running this code from
Alternatively use something like this:
$conn = pg_connect('host=myserver port=5432 dbname=database user=someuser password=secret'); 
*/
if (!$conn) { // Check if valid connection
// NO, some error occured
echo "Error Connecting to database<br>";
exit;
// add your error handling function here or just exit :)
} else {
// Valid connection, we can go on to retrieve some data
/*
Assume we have a table with user data called user_table
Username Password Userlevel 
user1      pass1       1
user2      pass2       2
etc.
1.)  Retrieve all rows and display it in a table
*/
$query = "select * from user_table order by Username";
$result = pg_query($conn,$query);
if (!$result) {
// Error on Query
// Your Error code Here
}  else {
 numrows = pg_numrows($result);
 echo "<table>";
 for ($i=0; $i < $numrows ; $i++) {
      $DataArr = pg_fetch_rows($result,$i);
      echo "<tr><td>$DataArr[0]</td><td>$DataArr[1</td><td>$DataArr [2]<td></tr>";
} // For
echo "</table>";
} // Query
} // Connection
pg_close($conn);
?>
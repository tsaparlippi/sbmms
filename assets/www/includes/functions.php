<?php
function guards()
 {
$gards = mysql_query("SELECT * FROM employees WHERE type ='guard'") or die(mysql_error()); 
WHILE($gard = mysql_fetch_array($gards)){
$id = $gard['emp_id'];
$firstname = $gard['first_name'];
$lastname = $gard['last_name'];
echo "<option value=\"$id\">$firstname $lastname</option>";
}
}
?>	
<?php
function persons()
 {
$emps = mysql_query("SELECT * FROM employees") or die(mysql_error()); 
WHILE($emp = mysql_fetch_array($emps)){
$id = $emp['emp_id'];
$firstname = $emp['first_name'];
$lastname = $emp['last_name'];
echo "<option value=\"$id\">$firstname $lastname</option>";
}
}
?>		

<?php
function equips() {
$equipments = mysql_query("SELECT * FROM equipments") or die(mysql_error()); 
WHILE($equips = mysql_fetch_array($equipments)){
$id = $equips['equip_id'];
$name = $equips['name'];
echo "<option value=\"$name\">$name</option>";
}
}
?>

<?php
function clients() {
$clients = mysql_query("SELECT * FROM clients") or die(mysql_error()); 
WHILE($client = mysql_fetch_array($clients)){
$id = $client['client_id'];
$firstname = $client['first_name'];
$lastname = $client['last_name'];
echo "<option value=\"$firstname $lastname\">$firstname $lastname</option>";
}
}
?>
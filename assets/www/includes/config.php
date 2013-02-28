<?php
	$connection = mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('capstone') or die(mysql_error());
?>

<?php
if(!isset($_SESSION['user_name'])){
?>
<script type="text/javascript">
window.location = 'index.php'
</script>
<?php } ?>

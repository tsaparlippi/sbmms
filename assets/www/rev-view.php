<<<<<<< HEAD
<?php
$con = pg_connect("localhost", "root", "");
if (!$con) {
    die("Error: " . pg_error());
}
pg_select_db("yee", $con);
$result = pg_query("SELECT * FROM revenues");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

=======
<!DOCTYPE html> 
<html> 
>>>>>>> view revenues
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<link rel="stylesheet" href="/tableview-master/css/latest.css" />
	<script src="js/jquery.min.js"></script>
	<script src="tableview-master/js/latest.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	
	<script src="facebox/facebox.js" type="text/javascript"></script>
 
	
	<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/loading.gif',
        closeImage   : 'facebox/closelabel.png'
      })
    })
	</script>

<body>

<div data-role="page" class="type-home" style="background-image: url('images/bg.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%;">

<div data-role="header" data-position="inline">
				<a href="index.php" data-icon="arrow-l">Back</a>
				<h1>Revenues</h1>
			</div>
	
<div data-role="content">	

		
		
		</div>
		
		<?php include('config1.php'); ?>
		
		
				<center>
				
				<table cellspacing="0" class="ui-responsive table-stroke" data-role="table" id="sample" data-mode="columntoggle" data-top-container="true" data-bottom-container="true" data-inset="true" data-filter="true">
         <thead>
           <tr class="ui-bar-d">
			 <th data-priority="2">Event</th> &nbsp;&nbsp;
             <th data-priority="3">Cost</th>
             </tr>
         </thead>
     
          
							
					<tbody>
					<?php $revenues = mysql_query("SELECT * FROM revenues") or die(mysql_error());  ?>
					<?php
			  
						$sql2 = mysql_query("SELECT id FROM revenues");
							if (isset($_GET['id'])) {
								$id = $_GET['id'];
								$sql2 = "DELETE FROM revenues WHERE id = '$id'";
									if (@mysql_query($sql2)) {
		
									} else {
		
								}
								}
		
						$sql = mysql_query("SELECT * FROM revenues ORDER BY id ASC");
						while($row = mysql_fetch_array($revenues)){ 
					
								echo '<tr>';
									echo '<td>'.$row['event'].'</td>';
									echo '<td>'.$row['cost'].'</td>';
								echo '<td>';
								echo '</tr> ';
							
								  }
			?>
			</tbody>
 			</table>
			
			</div></div></div>
			
		</div>
		</div>
				
</body>
</html>
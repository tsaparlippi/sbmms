<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<link href="css/index.css" media="screen" rel="stylesheet" type="text/css" />

	<link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
		
	<link rel='stylesheet' href='css/black-tie/jquery-ui-1.8.24.custom.css' />
	
	<script type='text/javascript' src='js/jquery-1.8.2.min.js' ></script>
	<script type='text/javascript' src='js/jquery-ui-1.8.24.custom.min.js' ></script>
	
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="facebox/facebox.js" type="text/javascript"></script>
 
	
	<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/loading.gif',
        closeImage   : 'facebox/closelabel.png'
      })
    })
	</script>
	
<body background="images/black.jpg">

	<br>
		<button class="btn btn-danger><font color="#000"><b>Back</b></font></button>
	<br>			
					
	           <center>
				<button class="btn" style="width:170px;"><font color="#000"><b>Customers</b></font></button>
				
		<?php include('config1.php'); ?>
		
		<div class="mainbox">
			<br>
					
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
		
						$sql = mysql_query("SELECT customer FROM revenues ORDER BY id ASC");
						while($row = mysql_fetch_array($revenues)){ 
					
								echo $row['customer'];	
								echo '<br>';
									
									
								  }
			?>
			
			</div></div></div>
			
		</div>
		</div>
				
</body>
</html>

<!DOCTYPE html> 
<html> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="css/jquery.mobile.min.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile.min.js"></script>
 
 
</head>

<body>


<div data-role="dialog">
	

<SCRIPT language=Javascript>
  
      function isNumberKey(evt)

      {

         var charCode = (evt.which) ? evt.which : event.keyCode

         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;	
		    return true;

} 
</script>

<div data-role="header" data-theme="d">
			<h1>Edit Customer</h1>

		</div>

<div data-role="content" data-theme="c">

<?php
	
	if (isset($_GET['id']))
	
	{
	
	echo '<form action="editcus-exec.php" method="post" name="">';
	
	
	
			include('config1.php');
		
			$id=(int)$_GET['id'];
	
			$result = mysql_query("SELECT * FROM customerdatabase WHERE id = $id");

			while($row = mysql_fetch_array($result))
			
  			{
			
				echo '<input type="hidden" name="userid" value="'. $row['id'] .'">'; 	
					
				echo '<input type="text" name="name"  placeholder="Name" value="'. $row['name'] .'">';
           
				echo '<input type="text" placeholder="Contanct Number" onkeypress="return isNumberKey(event)" name="contactnumber" value="'. $row['contactnumber'] .'">';
             
				echo '<td><input name="Input" type="submit" value="Save" data-theme="a" /></td>';
			}
	}
			
	?>
			
			</div>

	</div>
</body>
</html>
			

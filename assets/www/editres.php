
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
	
	if (isset($_GET['Guest_id']))
	
	{
	
	echo '<form action="editres-exec.php" method="post" name="">';
	
	
	
			include('config1.php');
		
			$Guest_id=(int)$_GET['Guest_id'];
	
			$result = mysql_query("SELECT * FROM guest WHERE Guest_id = $Guest_id");

			while($row = mysql_fetch_array($result))
			
  			{
			
				echo '<input type="hidden" name="Guest_id" value="'. $row['Guest_id'] .'">'; 	
					
				echo '<input type="text" name="Name"  placeholder="Name" value="'. $row['Name'] .'">';
				
				echo '<input type="text" name="Company"  placeholder="Company" value="'. $row['Company'] .'">';
				
				echo '<input type="text" name="Address"  placeholder="Address" value="'. $row['Address'] .'">';
           
				echo '<input type="text" placeholder="Contanct_no" onkeypress="return isNumberKey(event)" name="Contact_no" value="'. $row['Contact_no'] .'">';
				
				echo '<input type="text" name="Payment"  placeholder="Payment" value="'. $row['Payment'] .'">';
				
				echo '<input type="text" name="Amount"  placeholder="Amount" value="'. $row['Amount'] .'">';
             
				echo '<td><input name="Input" type="submit" value="Save" data-theme="a" /></td>';
			}
	}
			
	?>
			
			</div>

	</div>
</body>
</html>
			
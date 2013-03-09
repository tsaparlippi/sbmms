<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
<form id="cusaddForm" name="cusaddForm" method="post" action="cusadd-exec.php" onsubmit="return checkfields()" >
<script type="text/javascript">


//Validation scripts
 //function checkfields(){

	if((document.cusaddForm.date.value=="")|(document.cusaddForm.name.value=="")| (document.cusaddForm.company.value=="")|(document.cusaddForm.address.value=="")|(document.cusaddForm.contact.value=="")|(document.cusaddForm.fblink.value=="")){

		alert("All fields are required!");

		return false;		
	if(document.cusaddForm.date.value==""){

		alert("Please enter Name, Company, Address, Contact Number, and Facebook Link!");

		return false
	if((document.cusaddForm.date.value=="")|(document.cusaddForm.name.value=="")| (document.cusaddForm.company.value=="")|(document.cusaddForm.address.value=="")|(document.cusaddForm.contact.value=="")|(document.cusaddForm.fblink.value=="")){

		alert("All fields are required!");

		return false
	if((document.cusaddForm.date.value=="")|(document.cusaddForm.name.value=="")| (document.cusaddForm.company.value=="")|(document.cusaddForm.address.value=="")|(document.cusaddForm.contact.value=="")|(document.cusaddForm.fblink.value=="")){

		alert("All fields are required!");

		return false
	if((document.cusaddForm.date.value=="")|(document.cusaddForm.name.value=="")| (document.cusaddForm.company.value=="")|(document.cusaddForm.address.value=="")|(document.cusaddForm.contact.value=="")|(document.cusaddForm.fblink.value=="")){

		alert("All fields are required!");

		return false
	if((document.cusaddForm.date.value=="")|(document.cusaddForm.name.value=="")| (document.cusaddForm.company.value=="")|(document.cusaddForm.address.value=="")|(document.cusaddForm.contact.value=="")|(document.cusaddForm.fblink.value=="")){

		alert("All fields are required!");

		return false
	if((document.cusaddForm.date.value=="")|(document.cusaddForm.name.value=="")| (document.cusaddForm.company.value=="")|(document.cusaddForm.address.value=="")|(document.cusaddForm.contact.value=="")|(document.cusaddForm.fblink.value=="")){

		alert("All fields are required!");

		return false	}

	else{
		var ans=confirm("Do you want to proceed?");
		if(ans){
			alert("Successfully added!");
			return true;	}
		else
			return false;	}
	}
</script>
<!--para sa add data sa textbox -->
<SCRIPT language="javascript">
<!--

function addCombo() {
	var textb = document.getElementById("txtCombo");
	var combo = document.getElementById("combo");
	combo.value=combo.value +textb.value + ", ";
	textb.value = "";
	}
function Proceed() {
var r=confirm("Are you sure you want to delete this?");
if (r==true)
  {
  alert("Deleted!");
  }
else
  {
  alert("You pressed Cancel!");
  }

	}
//-->
</SCRIPT>
	<!--end--> 



<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="cusadd-exec.php" method="post" name="">';
	
	
	
			include('config1.php');	
			
			
			
			echo '<table width="300" border="0" cellpadding="0">';
              echo '<tr>';
                echo '<td width="87" valign="top"><div align="right">Date:</div></td>';
                echo '<td width="281"><div align="left"><input type="text" name="date" value=""></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Name:</div></td>';
                echo '<td><div align="left"><input type="text" name="name" value=""></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Company:</div></td>';
                echo '<td><div align="left"><input type="text" name="company" value=""></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Address:</div></td>';
                echo '<td><div align="left"><input type="text" name="address" value=""></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Contact:</div></td>';
                echo '<td><div align="left"><input type="text" name="contact" value=""></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Facebook Link:</div></td>';
                echo '<td><div align="left"><input type="text" name="fblink" value=""></div></td>';
              echo '</tr>';
              
               ?>
					
				
				<?php
				echo '</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right"></div></td>';
                echo '<td><input name="Input" type="submit" value="Save" class="btn btn-inverse" />';
				
              echo '</tr>';
            echo '</table>';
			
  			}
	echo '</form>';
			
			?>
			
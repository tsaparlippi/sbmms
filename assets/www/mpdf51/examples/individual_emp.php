<?php include('../../includes/print.php'); ?>
<?php $id = $_GET[id]; ?>
<?php $emps = mysql_query("SELECT * FROM employees WHERE emp_id = '$id'") or die(mysql_error());  ?>
<?php WHILE($emp = mysql_fetch_array($emps)){
				$id = $emp['emp_id'];
				$first_name = $emp['first_name'];
				$middle_initial = $emp['middle_initial'];
				$last_name = $emp['last_name'];
				$street = $emp['street'];
				$city = $emp['city'];
				$province = $emp['province'];
				$birthdate = $emp['birthdate'];
				$status = $emp['status'];
				$philhealth = $emp['philhealth'];
				$sss = $emp['sss'];
				$position = $emp['position'];
				$email = $emp['email'];
				$contact = $emp['contact'];
				$contact_per = $emp['contact_per'];
				$assignment = $emp['assignment'];
				$client = $emp['client'];
				$sitestreet = $emp['sitestreet'];
				$sitecity = $emp['sitecity'];
				$siteprovince = $emp['siteprovince'];
				$skills = $emp['skills'];
				$equipments = $emp['equipments'];
}				
?>
<?php
$html = '
<h2>'.$first_name.' '.$middle_initial.' '.$last_name.'</h2>
<table style="width: 638px;" cellspacing="0">
<tr><td style="background:#DCE4FF; border: 1px solid #fff;">Street</td>
<td style="border: 1px solid #fff;">'.$street.'</td>
</tr>
<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">City</td>
		<td style="border: 1px solid #fff;">'.$city.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Province</td>
		<td style="border: 1px solid #fff;">'.$province.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Birthdate</td>
		<td style="border: 1px solid #fff;">'.$status.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Status</td>
		<td style="border: 1px solid #fff;">'.$philhealth.'</td>
		</tr>
		
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Position</td>
		<td style="border: 1px solid #fff;">'.$position.'</td>
		</tr>

		
</table>
';
//==============================================================
//==============================================================
//==============================================================
include("../mpdf.php");

$mpdf=new mPDF('c','A4','','',32,25,27,25,16,13); 

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html,2);

$mpdf->Output('mpdf.pdf','I');
exit;
//==============================================================
//==============================================================
//==============================================================
?>
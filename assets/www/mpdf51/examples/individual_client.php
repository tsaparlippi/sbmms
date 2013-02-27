<?php include('../../includes/print.php'); ?>
<?php $id = $_GET[id]; ?>
<?php $clients = mysql_query("SELECT * FROM clients WHERE client_id = '$id'") or die(mysql_error());  ?>
<?php WHILE($client = mysql_fetch_array($clients)){
				$id = $client['emp_id'];
				$first_name = $client['first_name'];
				$middle_initial = $client['middle_initial'];
				$last_name = $client['last_name'];
				$gender = $client['gender'];
				$company = $client['company'];
				$street = $client['street'];
				$city = $client['city'];
				$province = $client['province'];
				$contact = $client['contact'];
}				
				
?>
<?php
$html = '
<h2>'.$first_name.' '.$middle_initial.' '.$last_name.'</h2>
<table style="width: 638px;" cellspacing="0">

<tr><td style="background:#DCE4FF; border: 1px solid #fff;">Gender</td>
<td style="border: 1px solid #fff;">'.$gender.'</td>
</tr>
<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Company</td>
		<td style="border: 1px solid #fff;">'.$company.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Street</td>
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
		<td style="background:#DCE4FF; border: 1px solid #fff;">Contact No.</td>
		<td style="border: 1px solid #fff;">'.$contact.'</td>
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
<?php include('../../includes/print.php'); ?>
<?php $clients = mysql_query("SELECT * FROM clients") or die(mysql_error());  ?>
<?php WHILE($client = mysql_fetch_array($clients)){
				$id = $client['client_id'];
				$first_name = $client['first_name'];
				$middle_initial = $client['middle_initial'];
				$gender = $client['gender'];
				$last_name = $client['last_name'];
				$company = $client['company'];
				$city = $client['city'];
				$province = $client['province'];
				$contact = $client['contact'];
				$guards = $client['guards'];
?>
<?php
$tbl .= '<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$first_name.'</td>
		<td style="border: 1px solid #fff;">'.$middle_initial.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$last_name.'</td>
		<td style="border: 1px solid #fff;">'.$gender.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$company.'</td>
		<td style="border: 1px solid #fff;">'.$city.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$province.'</td>
		<td style="border: 1px solid #fff;">'.$contact.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$guards.'</td>
    </tr>';
	?>
<?php } ?>
<?php
$html = '
<h2>Clients</h2>
<table style="width: 638px;" cellspacing="0">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Middle Initial</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Company</th>
			<th>City</th>
			<th>Province</th>
			<th>Contact</th>
			<th>Guards</th>
		</tr>
	</thead>
	<tbody>

'. $tbl.'
</tbody>
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
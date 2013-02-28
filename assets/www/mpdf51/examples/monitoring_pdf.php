<?php include('../../includes/print.php'); ?>
<?php $monitoring = mysql_query("SELECT * FROM monitoring") or die(mysql_error());  ?>
<?php WHILE($mon = mysql_fetch_array($monitoring)){
				$transact_from = $mon['transact_from'];
				$transact_to = $mon['transact_to'];
				$guards = $mon['guards'];
				$client = $mon['client'];
				$equipments = $mon['equipments'];
				
?>
<?php
$tbl .= '<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$transact_from.'</td>
		<td style="border: 1px solid #fff;">'.$transact_to.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$guards.'</td>
		<td style="border: 1px solid #fff;">'.$client.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$equipments.'</td>
		
    </tr>';
?>
<?php } ?>
<?php
$html = '
<h2>Monitoring</h2>
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>Transaction from</th>
			<th>Transaction to</th>
			<th>Guards</th>
			<th>Client</th>
			<th>Equipments</th>
			
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
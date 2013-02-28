<?php include('../../includes/print.php'); ?>
<?php $id = $_POST[id]; ?>
<?php $monitoring = mysql_query("SELECT * FROM monitoring WHERE guards = '$id'") or die(mysql_error());  ?>
<?php WHILE($mon = mysql_fetch_array($monitoring)){
				$id = $mon['trans_id'];
				$transact_from = $mon['transact_from'];
				$transact_to = $mon['transact_to'];
				$guards = $mon['guards'];
				$client = $mon['client'];
				$equipments = $mon['equipments'];
				
}				
?>
<?php
$html = '
<h2>Transaction</h2>
<table style="width: 638px;" cellspacing="0">
<tr><td style="background:#DCE4FF; border: 1px solid #fff;">Street</td>
<td style="border: 1px solid #fff;">'.$transact_from.'</td>
</tr>
<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Expense Type</td>
		<td style="border: 1px solid #fff;">'.$transact_to.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Quantity</td>
		<td style="border: 1px solid #fff;">'.$guards.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Cost</td>
		<td style="border: 1px solid #fff;">'.$client.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Date</td>
		<td style="border: 1px solid #fff;">'.$equipments.'</td>
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
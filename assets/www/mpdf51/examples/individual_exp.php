<?php include('../../includes/print.php'); ?>
<?php $id = $_GET[id]; ?>
<?php $exps = mysql_query("SELECT * FROM expenses WHERE exp_id = '$id'") or die(mysql_error());  ?>
<?php WHILE($exp = mysql_fetch_array($exps)){
				$id = $exp['emp_id'];
				$exp_name = $exp['exp_name'];
				$exp_type = $exp['exp_type'];
				$quantity = $exp['quantity'];
				$cost = $exp['cost'];
				$date = $exp['date'];
				
}				
?>
<?php
$html = '
<h2>'.$exp_name.' </h2>
<table style="width: 638px;" cellspacing="0">
<tr><td style="background:#DCE4FF; border: 1px solid #fff;">Street</td>
<td style="border: 1px solid #fff;">'.$street.'</td>
</tr>
<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Expense Type</td>
		<td style="border: 1px solid #fff;">'.$exp_type.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Quantity</td>
		<td style="border: 1px solid #fff;">'.$quantity.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Cost</td>
		<td style="border: 1px solid #fff;">'.$cost.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Date</td>
		<td style="border: 1px solid #fff;">'.$date.'</td>
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
<?php include('../../includes/print.php'); ?>
<?php $expenses = mysql_query("SELECT * FROM expenses ORDER BY date DESC") or die(mysql_error());  ?>
<?php WHILE($exp = mysql_fetch_array($expenses)){
				$exp_id  = $exp['exp_id'];
				$expense = $exp['expense'];
				$exp_type = $exp['exp_type'];
				$particulars  = $exp['particulars'];
				$cost = $exp['cost'];
				$date = $exp['date'];
?>
<?php
$tbl .= '<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$expense.'</td>
		
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$particulars.'</td>
		<td style="background:#DCE4FFborder: 1px solid #fff;">'.$cost.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$date.'</td>
    </tr>';
	?>
<?php } ?>
<?php
$html = '
<h2>Expenses</h2>
<table style="width: 638px;" cellspacing="0">
	<thead>
		<tr>
			<th>Expenses</th>
			
			<th>Particulars</th>
			<th>Cost</th>
			<th>Date</th>
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
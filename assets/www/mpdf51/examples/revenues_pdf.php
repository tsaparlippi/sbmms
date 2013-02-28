<?php include('../../includes/print.php'); ?>
<?php $revenues= mysql_query("SELECT * FROM revenues ORDER BY date DESC") or die(mysql_error());  ?>
<?php WHILE($rev = mysql_fetch_array($revenues)){
				$rev_id  = $rev['rev_id'];
				$event = $rev['event'];
				$customer = $rev['customer'];
				$particulars  = $rev['particulars'];
				$cost = $rev['cost'];
				$date = $rev['date'];
?>
<?php
$tbl .= '<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$event.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$customer.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$particulars.'</td>
		<td style="background:#DCE4FFborder: 1px solid #fff;">'.$cost.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$date.'</td>
    </tr>';
	?>
<?php } ?>
<?php
$html = '
<h2>Revenues</h2>
<table style="width: 638px;" cellspacing="0">
	<thead>
		<tr>
			<th>Revenues</th>
			<th>Customer</th>
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
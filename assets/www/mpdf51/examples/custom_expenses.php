<?php include('../../includes/print.php'); ?>
<?php $month = $_POST['month'];
$year = $_POST['year'];
?>
<?php $expenses = mysql_query("SELECT * FROM expenses WHERE month(date) = '$month' AND year(date) = '$year' ORDER BY date ASC") or die(mysql_error());  ?>
<?php WHILE($exp = mysql_fetch_array($expenses)){
$exp_name = $exp['exp_name'];
$expense = $exp['expense'];
$particulars  = $exp['particulars'];
$cost = $exp['cost'];
$date = $exp['date'];
$tbl .= '<tr>
        <td style="background:#DCE4FF; border: 1px solid #fff;">'.$date.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$expense.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$particulars.'</td>
		<td align="right" style="background:#DCE4FF; border: 1px solid #fff;">'.$cost.'</td>
    </tr>';
?>
<?php } ?>
<?php $test = mysql_query("SELECT SUM(cost) total FROM expenses WHERE month(date) = '$month' AND year(date) = '$year'") or die(mysql_error());  ?>
<?php WHILE($t = mysql_fetch_array($test)){
$total  = $t['total'];
};
?>
<?php $html = '
<h2>Expenses</h2>

<table style="width: 638px;" cellspacing="0">
	<thead>
		<tr>
			<th>Date</th>
			<th>Expenses</th>
			<th>Particulars</th>
			<th>Cost</th>
		</tr>
	</thead>
	<tbody>
'.$tbl.'

</tbody>
</table>

<tr>
      <p align="right"> <br>Total Expenses: '.$total.'.00 Php</p>

    </tr>

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

$mpdf->WriteHTML($html,$total,2);

$mpdf->Output('mpdf.pdf','I');
exit;
//==============================================================
//==============================================================
//==============================================================
?>
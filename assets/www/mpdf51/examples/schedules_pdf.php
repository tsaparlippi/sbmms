<?php include('mpdf51/includes/print.php'); ?>
<?php $emp = mysql_query("SELECT * FROM schedules ORDER BY date DESC") or die(mysql_error());  ?>
<?php WHILE($emps = mysql_fetch_array($emp)){
				$activity = $emps['activity'];
				$date = $emps['date'];
				$time = $emps['time'];
				$persons = $emps['persons'];
				$address = $emps['street'] . "&nbsp;" . $emps['city']. "&nbsp;" . $emps['province'];
?>
<?php
$tbl .= '<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$activity.'</td>
		<td style="border: 1px solid #fff;">'.$date.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$time.'</td>
		<td style="border: 1px solid #fff;">'.$persons.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$address.'</td>
    </tr>';
	?>
<?php } ?>
<?php
$html = '
<h2>Schedules</h2>
<table style="width: 638px;" cellspacing="0">
	<thead>
		<tr>
			<th>Activity</th>
			<th>Date</th>
			<th>Time</th>
			<th>Person(s)</th>
			<th>Location</th>
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
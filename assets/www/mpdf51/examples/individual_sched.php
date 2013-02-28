<?php include('../../includes/print.php'); ?>
<?php $sched_id = $_GET[sched_id]; ?>
<?php $scheds = mysql_query("SELECT * FROM schedules WHERE sched_id = '$sched_id'") or die(mysql_error());  ?>
<?php WHILE($sched = mysql_fetch_array($scheds)){
				$sched_id = $sched['sched_id'];
				$event = $sched['event'];
				$date = $sched['date'];
				$time = $sched['time'];
				$venue = $sched['venue'];
				$customer = $sched['customer'];
}				
?>
<?php
$html = '
<h2>'.$event.'</h2>
<table style="width: 638px;" cellspacing="0">
<tr><td style="background:#DCE4FF; border: 1px solid #fff;">Date</td>
<td style="border: 1px solid #fff;">'.$date.'</td>
</tr>
<tr>
		<td style="background:#000000; border: 1px solid #fff;">Time</td>
		<td style="border: 1px solid #fff;">'.$time.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Venue</td>
		<td style="border: 1px solid #fff;">'.$venue.'</td>
		</tr>
		<tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Persons</td>
		<td style="border: 1px solid #fff;">'.$customer.'</td>
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
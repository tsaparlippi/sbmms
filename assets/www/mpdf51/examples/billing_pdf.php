<?php include('../../../includes/config.php'); ?>
<?php $trainers = mysql_query("SELECT * FROM billing") or die(mysql_error());  ?>
<?php WHILE($bill = mysql_fetch_array($trainers)){
				$id = $bill['billing_id'];
				$name = $bill['firstname']. "&nbsp;" .$bill['lastname'];
				$bill_before = $bill['bill_before'];
				$amount = $bill['amount'];
				$balance = $bill['balance'];
				$date = $bill['date'];
				$ddate = $bill['d_date'];
?>
<?php
$tbl .= '<tr>
	    <td>'. $id.'</td>
				<td>'.$name.'</td>
				<td>'. $bill_before.'</td>
				<td>'.$amount.'</td>
				<td>'.$balance.'</td>
				<td>'.$date.'</td>
				<td>'.$ddate.'</td>
    </tr>';
	?>
<?php } ?>
<?php
$html = '<img src="http://72.18.195.90/~admin/system/images/logo.png" />
<h2>Gym Trainers</h2>
<table style="width: 638px;" cellspacing="0">
	<thead>
		<tr>
			<th>Receipt Number</th>
			<th>Client Name</th>
			<th>Amount</th>
			<th>Amount Paid</th>
			<th>Remaining Balance</th>
			<th>Date of Payment</th>
			<th>Due Date</th>
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
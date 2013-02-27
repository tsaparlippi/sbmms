<?php include('../../../includes/config.php'); ?>
<?php $txn_id = $_GET['passkey']; ?>
<?php $sales = mysql_query("SELECT * FROM sales LEFT JOIN registered_members ON sales.custom = registered_members.email WHERE txn_id = '$txn_id'") or die(mysql_error());  ?>
<?php WHILE($sale = mysql_fetch_array($sales)){
				$payment_date  = $sale['payment_date'];
				$item_number  = $sale['item_number'];
				$custom = $sale['custom'];
				$plan = $sale['plan'];
				$firstname = $sale['firstname'];
				$lastname = $sale['lastname'];
				$address = $sale['address'];
				$date_reg = $sale['date_reg'];
				}
				?>
<?php
if ($plan=='unlimited')
$name="1200";
elseif($plan=='twice a week')
$name="1000";
elseif($plan=='thrice a week')
$name="1100";
else
$name="NA";
$html = '<img src="http://72.18.195.90/~admin/system/images/logo.png" />
<h1>Payment Receipt</h1>
<h2>Transaction number :'.$txn_id.'</h2>
<p class="breadcrumb">'.$payment_date.'</p>
<p>Plan name: '.$plan.'</p>
<p>Address: '.$address.'</p>
<p>Member Name: '.$firstname.'&nbsp;'.$lastname.'</p>
<p>Email: '.$custom.'</p>
<table style="width:100%;">
	<thead>
		<tr>
			<th>Description</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Amount</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<td>'.$plan.'</td>
		<td>'.$name.'PHP</td>
		<td>1</td>
		<td>'.$name.'PHP</td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td>Total</td>
		<td>'.$name.'PHP</td>
		</tr>	
	</tbody>
</table>
<pagefooter name="odds" content-right="Odd Footer" footer-style-right="color: #880000; font-style:
italic;" line="1" />
';


//==============================================================
//==============================================================
//==============================================================

include("../mpdf.php");

$mpdf=new mPDF('c'); 

/* $mpdf->SetDisplayMode('fullpage'); */

$mpdf->SetWatermarkText('PAID');
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->showWatermarkText = true;

// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyleA4.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
//==============================================================
//==============================================================
//==============================================================

?>
<?php include('../../includes/print.php'); ?>
<?php $id = $_GET[id]; ?>
<?php $equips = mysql_query("SELECT * FROM equipments WHERE equip_id = '$id'") or die(mysql_error());  ?>
<?php WHILE($equip = mysql_fetch_array($equips)){
				$id = $equip['equip_id'];
				$name = $equip['name'];
				$type = $equip['type'];
				$serial = $equip['serial'];
				$brand = $equip['brand'];
				$quantity = $equip['quantity'];
				$price = $equip['price'];
				$license = $equip['license'];
				$permit_from = $equip['permit_from'];
				$permit_to = $equip['permit_to'];
}				
				
?>
<?php
$html = '
<h2>'.$name.' </h2>
<table style="width: 638px;" cellspacing="0">

<tr><td style="background:#DCE4FF; border: 1px solid #fff;">Type</td>
<td style="border: 1px solid #fff;">'.$type.'</td>
</tr>
<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Serial No.</td>
		<td style="border: 1px solid #fff;">'.$serial.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Brand</td>
		<td style="border: 1px solid #fff;">'.$brand.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Quantity</td>
		<td style="border: 1px solid #fff;">'.$quantity.'</td>
		</tr>
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Price</td>
		<td style="border: 1px solid #fff;">'.$price.'</td>
		</tr>
		
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">License No.</td>
		<td style="border: 1px solid #fff;">'.$license.'</td>
		</tr>
		
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Permit Validity Begin</td>
		<td style="border: 1px solid #fff;">'.$permit_from.'</td>
		</tr>
		
		<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">Permit Validity End</td>
		<td style="border: 1px solid #fff;">'.$permit_to.'</td>
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
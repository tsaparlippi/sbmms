<?php include('../../includes/print.php'); ?>
<?php $type = $_POST['type']; ?>
<?php $equipments = mysql_query("SELECT * FROM equipments WHERE type ='$type'") or die(mysql_error());  ?>
<?php WHILE($equip = mysql_fetch_array($equipments)){
				$name = $equip['name'];
				$type = $equip['type'];
				$model = $equip['model'];
				$brand = $equip['brand'];
				$quantity = $equip['quantity'];
				$license = $equip['license'];	
				$guards = $equip['guards'];
?>
<?php
$tbl .= '<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$name.'</td>
		<td style="border: 1px solid #fff;">'.$type.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$model.'</td>
		<td style="border: 1px solid #fff;">'.$brand.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$quantity.'</td>
		<td style="border: 1px solid #fff;">'.$license.'</td>
		<td style="border: 1px solid #fff;">'.$guards.'</td>
    </tr>';
	?>
<?php } ?>
<?php
$html = '
<h2>Equipments</h2>
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>Name</th>
			<th>Type</th>
			<th>Model</th>
			<th>Brand</th>
			<th>Quantity</th>
			<th>License</th>
			<th>Guards</th>
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
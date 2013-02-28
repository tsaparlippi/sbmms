<?php include('../../../includes/config.php'); ?>
<?php $members = mysql_query("SELECT * FROM registered_members") or die(mysql_error());  ?>
<?php WHILE($mems = mysql_fetch_array($members)){
				$firstname = $mems['firstname'];
				$lastname = $mems['lastname'];
				$birthdate = $mems['birthdate'];
				$address = $mems['address'];
				$contact_num = $mems['contact_num'];
				$email  = $mems['email'];
				$gender  = $mems['gender'];
?>
<?php
$tbl .= '<tr>
        <td style="background:#DCE4FF; border: 1px solid #fff;">'.$firstname.'&nbsp;'.$lastname.'</td>
		<td style="border: 1px solid #fff;">'.$birthdate.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$address.'</td>
		<td style="border: 1px solid #fff;">'.$contact_num.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$email.'</td>
		<td style="border: 1px solid #fff;">'.$gender.'</td>
    </tr>';
	?>
<?php } ?>
<?php
$html = '<img src="http://72.18.195.90/~admin/system/images/logo.png" />
<h2>Gym Members</h2>
<table style="width: 638px;" cellspacing="0">
	<thead>
		<tr>
			<th>Name</th>
			<th>Birthdate</th>
			<th>Address</th>
			<th>Contact&nbsp;number</th>
			<th>Email</th>
			<th>Gender</th>
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
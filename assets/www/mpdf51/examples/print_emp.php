<?php include('../../includes/print.php'); ?>
<?php $type= $_POST['type']; ?>
<?php if ($type=='emp'){
$title = 'Staffs';
}
else
{ $title = 'Guards';
 }
?>
<?php $emp = mysql_query("SELECT * FROM employees WHERE type='$type' ") or die(mysql_error());  ?>
<?php WHILE($emps = mysql_fetch_array($emp)){
				$id = $emps['emp_id'];
				$position = $emps['position'];
				$assignment = $emps['assignment'];
				$client = $emps['client'];
				$name = $emps['first_name'] . "&nbsp;" . $emps['last_name'];
?>
<?php
$tbl .= '<tr>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$name.'</td>
		<td style="border: 1px solid #fff;">'.$client.'</td>
		<td style="background:#DCE4FF; border: 1px solid #fff;">'.$assignment.'</td>
		<td style="border: 1px solid #fff;">'.$position.'</td>
    </tr>';
	?>
<?php } ?>
<?php
$html = '
<h2>'.$title.'</h2>
<table style="width: 638px;" cellspacing="0">
	<thead>
		<tr>
			<th>Name</th>
			<th>Client</th>
			<th>Assignment</th>
			<th>Position</th>
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
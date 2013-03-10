<?php
$con = mysql_connect("localhost", "root", "");
if (!$con) {
    die("Error: " . mysql_error());
}
mysql_select_db("sbms", $con);
$result = mysql_query("SELECT * FROM expenses");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script> 
	
	
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="facebox/facebox.js" type="text/javascript"></script>
 
	
	<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/loading.gif',
        closeImage   : 'facebox/closelabel.png'
      })
    })
	</script>
	<style type="text/css" title="currentStyle">
		
			@import "css/demo_table_jui.css";
			@import "js/smoothness/jquery-ui-1.8.4.custom.css";
		</style>
		
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				oTable = $('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});
			} );
		</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="media/js/jquery.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/smoothness/jquery-ui-1.8.4.custom.css";
        </style>
        <style>
            *{
                font-family: arial;
            }
        </style>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $('#datatables').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":true
                });
            })
        </script>
    </head>
    <body>
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>Expenses</th>
                        <th>Amount</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?=$row['expense']?></td>
                            <td><?=$row['cost']?></td>
                          
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
				
</body>
</html>
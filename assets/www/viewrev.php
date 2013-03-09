
<?php
				  if (isset($_GET['id']))
	{
	

			include('config1.php');
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM revenues WHERE id=$id");

			while($query_row = mysql_fetch_array($result))
  			{
			
			
		echo '<input type="hidden" name="userid" value="'. $query_row['id'] .'">'; 	
			
			
			
			echo '<table width="600" border="0" cellpadding="0">';
              echo '<tr>';
                echo '<td width="87" valign="top"><div align="right">DATE:</div></td>';
                echo '<td width="281"><div align="left">&nbsp;&nbsp;&nbsp;'. $query_row['date'] .'</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Event:</div></td>';
                echo '<td><div align="left">&nbsp;&nbsp;&nbsp;'. $query_row['event'] .'</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Customer:</div></td>';
                echo '<td><div align="left">&nbsp;&nbsp;&nbsp;'. $query_row['customer'] .'</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Particulars:</div></td>';
                echo '<td><div align="left">&nbsp;&nbsp;&nbsp;'. $query_row['particulars'] .'</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Amount:</div></td>';
                echo '<td><div align="left">&nbsp;&nbsp;&nbsp;'. $query_row['cost'] .'</div></td>';
              echo '</tr>';
              
               ?>
				
				<?php
				echo '</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right"></div></td>';
				echo '<td>';
				
				echo '</td>';
			  echo '</tr>';
            echo '</table>';
			
  			}
	echo '</form>';
			}
			?>
			
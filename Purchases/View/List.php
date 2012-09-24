<html>
<body>
	<form action='.' method='post' />
	<input type='submit' name='add' value='add' />
	<table>
		<tr>
			<th>date</th>
			<th>purchase</th>
			<th>price</th>
			<th> tally</th>
		</tr>

		<?php
		 $nTotal = 0;
		 foreach($aPurchases as $oPurchase){?>

		<tr>
			<td><?php echo $oPurchase->date ?>
			</td>
			<td><?php echo $oPurchase->purchase ?>
			</td>
			<td><?php $nTotal += $oPurchase->price;
				echo "current total"." $".$oPurchase->price ?>
			</td>
			<td><?php
				echo "tally"." $". $nTotal;
				?>
			</td>
		</tr>

		<?php } ?>
		
		
				
	</table>
				
	<input type='submit' name='add' value='add' />
	<p><?php
		echo "Final Total"." $". $nTotal;
	?>
	</p>
	
		

	</form>
</body>
</html>

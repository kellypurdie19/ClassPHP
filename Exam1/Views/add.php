<html><body>
<h1>Days we ate together</h1>
<table>
	<tr><th>date</th><th>members</th></tr>

	<?php foreach($aMeals as $aMeal){?>
		
		<tr>
			<td><?php echo $aMeal['date'];?></td>
			<td><?php echo $aMeal['members'];?></td>
			
		</tr>	
	<?php } ?>
	<form action='.' method="post">
		<tr>
			<td><input type='text' name='date' /></td>
			<td><input type='text' name='members'/></td>
			<td><input type='submit' value='add' />
		</tr>
	</form>
</table>
</body></html>
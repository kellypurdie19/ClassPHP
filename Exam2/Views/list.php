<html><body><form action='.' method='post'>
<h1>Job Search list:</h1>
<table>
                <tr>
                    <th>»Date Posted</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th class="right">ID</th>
                </tr>

<?php	foreach(Job::find('all') as $oJob){ ?>
		<tr>
		  <td><?php echo $oJob->datetime; ?></td>
		  <td><?php echo $oJob->title; ?></td>
		  <td><?php echo $oJob->link;?></td>
		  <td><?php echo "<a href=?action=Add&NextAction=".$oJob->id.">.$oJob->id</a>"; ?></td>
		 </tr>
		
<?php } ?>
</table>

</form></body></html>




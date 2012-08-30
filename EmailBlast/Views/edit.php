<html><body><form action='.' method='post'>
<ul>
<?php 
	foreach(Email::find('all') as $sEmail){ 
		 echo '<li>'.$sEmail->email.'</li>';
		 echo "<a href=?action=Delete&email=".$sEmail->email."><img src='Views/images/cross.png' alt='Delete' /></a>";
	
}
?>

</ul>
<input type='text' name='email'/><input type='submit' name='action' value='Subscribe'/>

</form></body></html>




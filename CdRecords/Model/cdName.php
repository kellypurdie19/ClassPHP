<?php
function getName()// naming my function
{
	global $db;
	$query = 'select Name from cdname';
	return $db->query($query);

}
 function addCD($sTitles)
 {
 	global $db;
 	$query = "insert into cdname(Name) values ('$sTitles')";// my sql
 	$db->exec($query); 
 	
 	
 }
 
?>

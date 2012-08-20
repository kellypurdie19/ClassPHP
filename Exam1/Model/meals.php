<?php
function getMeals()
{
	global $db;
	$query = 'select date, members from meals';
	return $db->query($query);
}

function addMeals($sDate,$sMembers)
{
	global $db;
	$query = "insert into meals (date, members) values('$sDate', $sMembers)";
	//echo $query;
	$db->exec($query); 
}
?>
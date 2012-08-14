<?php
require 'database.php';
function get_teams()
{
	global $db;
	$query = 'select name from team';
	return $db->query($query);

}
?>
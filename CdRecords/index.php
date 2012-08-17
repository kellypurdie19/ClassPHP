<?php 
	require 'Model/database.php';
	require 'model/cdName.php';
		
	if(array_key_exists('title', $_POST)){
		addCD($_POST['title']);
	}
	
	$aMyCDs = getName();
	include 'views/newCD.php';
	
?>


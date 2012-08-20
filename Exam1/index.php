<?php
require 'Model/database.php';
require 'Model/meals.php';

if(array_key_exists('date', $_POST)){
	//echo 'exists ' . $_POST['date'];
	addMeals($_POST['date'], $_POST['members']);
}
$aMeals = getMeals();

include 'views/add.php';
?>


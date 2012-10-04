<?php
if(array_key_exists('submit', $_POST)){
	
	$oPurchase = new Purchase;//becasue I have no parameters other wise catchers require.
	$oPurchase->date = $_POST['date'];
	$oPurchase->purchase = $_POST['purchase'];
	$oPurchase->price = $_POST['price'];
	$oPurchase->save();

}

if(array_key_exists('add', $_POST)){
	include 'View/add.php';
}else{
	$aPurchases = Purchase::find('all');
	include 'View/List.php';
}

include 'View/searchquery.php';


?>

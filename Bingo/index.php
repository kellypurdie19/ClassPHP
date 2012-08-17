<html><body>
<?php
include 'views/form.php';
require 'model/Dog.php';
 $oBingo = new Dog('collie'');
 if(array_key_exists('sEat', $_POST)){
	$oBingo->aFood($_POST['sEat']);
 }
include 'views/feelings.php';

?>
</body></html>
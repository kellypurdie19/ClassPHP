<?php

function sayHello()
{
	echo "hello World!";
}
$fSayGoodDay = function()
{
	echo "good day!";
};// when you have a variable declaration and not a function you need to end it with a ";"

function callMeBack($fCallMe)
{
	$fCallMe();
}

?>

<html><body><?php callMeBack($fSayGoodDay);?></body></html>
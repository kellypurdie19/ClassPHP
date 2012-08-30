<?php
if(!isset($_SERVER['HTTPS'])){
	// then we arte not on https
	$url = 'https://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	//echo $url . "\n";
	//print_r($_SERVER);//server variable
	header("Location:" . $url);//re-direct its header location and forces a https 
	exit();
}

?>
<html>
<body>
Hello World
</body>
</html>
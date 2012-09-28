<?php 
require_once "model.php"; 
if($_REQUEST[auto] == "on") { 
$meta = "<meta http-equiv="refresh" content="2;url=$PHP_SELF?image=$next_img&auto=on" /> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />"; 
$nav = "<a href="/img_articles/12068/$PHP_SELF?image=$back_img&auto=on">Back</a> | 
<a href="/img_articles/12068/$PHP_SELF?image=$image&auto=off">Stop Slideshow</a> | 
<a href="/img_articles/12068/$PHP_SELF?image=$next_img&auto=on">Next</a>"; 
} 
if($_REQUEST[auto] == "off" || !$_REQUEST[auto]) { 
$meta = " <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />"; 
$nav = "<a href="/img_articles/12068/$PHP_SELF?image=$back_img&auto=off">Back</a> | 
<a href="/img_articles/12068/$PHP_SELF?image=$image&auto=on">Start Slideshow</a> | 
<a href="/img_articles/12068/$PHP_SELF?image=$next_img&auto=off">Next</a>"; 
} 
echo<<<EOF 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html> 
<head> 
<title>Page Title</title> 
$meta 
</head> 
<body> 
EOF; 
if(!$_REQUEST[image]) { //Default thumbnil page 
$i = 0; 
foreach($arr_img as $var_img) { //Grabs all the image names in th array 
if($var_img != "") { //Dont show first entery of the array that is blank 
echo<<<EOF 
<a href="/img_articles/12068/$PHP_SELF?image=$i"><img src="/img_articles/12068/./thumbs/$var_img" /></a> 
EOF; 
} 
$i++; 
} 
} else { //Show the slides 
echo<<<EOF 
<div align="center"> 
<img src="/img_articles/12068/./slides/$arr_img[$image]" /><br /><br /> 
$nav 
</div> 
EOF; 
} 
?>

<!-- Read more: http://www.webdesign.org/web-programming/php/image-slideshow.12068.html#ixzz27jjdiDaC--><div id="database">
<article class="image-container">
<h1> Under Construction! </h1>
<input class="next" type="submit" value="next" name="submit"/> 
<div>
	<img src="" name="" alt=""/>
	<p></p>
	
<div>


<p id="access">
		<img src="images/Access.jpg" name="Access" alt="Access Sample" /><br/>
		Small database created using Microsoft Access. 
	</p>
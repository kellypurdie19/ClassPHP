<?
require_once "config.php";
if($_REQUEST[auto] == "on") {
    $meta = "<meta http-equiv=\"refresh\" content=\"2;url=$PHP_SELF?image=$next_img&amp;auto=on\" />
                    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />";
    $nav = "<a href=\"$PHP_SELF?image=$back_img&amp;auto=on\">Back</a> |
                 <a href=\"$PHP_SELF?image=$image&amp;auto=off\">Stop Slideshow</a> |                
                 <a href=\"$PHP_SELF?image=$next_img&amp;auto=on\">Next</a>";
}
if($_REQUEST[auto] == "off" || !$_REQUEST[auto]) {
    $meta = "   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />";
    $nav = "<a href=\"$PHP_SELF?image=$back_img&amp;auto=off\">Back</a> |
                 <a href=\"$PHP_SELF?image=$image&amp;auto=on\">Start Slideshow</a> |                
                 <a href=\"$PHP_SELF?image=$next_img&amp;auto=off\">Next</a>";
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
            <a href="$PHP_SELF?image=$i"><img src="./thumbs/$var_img" /></a> 
EOF;
        }
$i++;
}
} else { //Show the slides
    echo<<<EOF
         <div align="center">
        <img src="./slides/$arr_img[$image]" /><br /><br />
        $nav
        </div>
EOF;
}
?>

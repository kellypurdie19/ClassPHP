<?php
	header("Content-Type: text/plain");
$sIn= file_get_contents("https://www.technosport.com/sites/EN/WEnglish/Enterprise%20Portal/productCatalogItems.aspx?HTID=935&HGID=TShirts&WCMP=TSC1");
//echo $sIn;

if(preg_match_all('|<table id="MSO_ContentTable(.*)</table>|sU', $sIn, $aIn)){
	foreach ($aIn[0] as $sTable){	echo $sTable . "\n";
	}
}else{
	echo "nothing to display";}
?>



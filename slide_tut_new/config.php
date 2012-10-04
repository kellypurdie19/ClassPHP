<?
$total = 4; //Total number of images in slideshow
$var_total = 5; //Total number of images + 1

$arr_img = array('', //empy array image set for [0]
                            'Stellar.jpg', //Image names to be displayed in the slideshow
                            'Submerged.jpg',
                            'b_luecrab.jpg',
                            'darkness.jpg');

//Puts All Files In A Given Directory Into An Array
//If You Plan To Use This, Delete The Code For The Array Given Above
//$arr_img = Array();
//$handle = opendir(./img dir/);
//while (false !== ($file = readdir($handle))) {
//   if ($file != "." && $file != "..") {
//   $arr_img[] = $file;
//   }
//} 

//No Need to edit below here
$i = 1;
$next = 2;
$back = 0;
while($i <= $total){
    if($back == 0) {
        $back_link = $total;
    } else {
        $back_link = $back;
    }
    if($next == $var_total) {
        $next_link = 1;
    } else {
        $next_link = $next;
    }
    if ($image == "$i") {
        $next_img = "$next_link";
        $back_img = "$back_link";
    }
$i++;
$next++;
$back++;
}
?>

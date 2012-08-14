<html><body><h1>
<?php
   foreach($categories as $category){
   	echo $category['categoryName'].'<br>';
   }
   foreach($products as $product){
   	echo $product['productName'].'<br>';
   }
   echo "Hello World";
?>
</h1></body></html>

<?php
require '../model/categories.php';
$categories = get_categories();

require '../model/products.php';
$products = get_products();
include 'list.php';

?>
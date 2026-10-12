<?php
require_once "../classes/Products.php";

$product = new Products;

$product->update($_POST, $_FILES);
?>
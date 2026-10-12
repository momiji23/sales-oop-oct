<?php
public function add($request) {
    $product_name = $request['product_name'];
    $price = $request['price'];
    $quantity = $request['quantity'];

    $sql = "INSERT INTO products (product_name, price, quantity) VALUES ('$product_name', '$price', '$quantity')";
}

// This code is from GIT have.
?>

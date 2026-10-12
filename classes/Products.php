<?php
require_once "Database.php";

class Products extends Database {

public function store($request)
{
    $product_name   =$request['product_name'];
    $price      =$request['price'];
    $quantity       =$request['quantity'];
   
    $sql = "INSERT INTO products
    (`product_name`, `price`, `quantity`)
        VALUES ('$product_name', '$price', '$quantity')";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error creating the product: ' . $this->conn->error);
        }
    }

    public function getAllProducts(){
        $sql = "SELECT * FROM Products";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Error retrieving all products: ' . $this->conn->error);
        }
    }
    public function getProduct($id){
        $sql = "SELECT * FROM products WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrieving all products: ' . $this->conn->error);
        }
    }

public function update($request, $id){
    session_start();
    $id         = $_SESSION['id'];
    $product_name = $request['product_name'];
    $price  = $request['price'];
    $quantity   = $request['quantity'];
    

    $sql = "UPDATE products SET product_name = '$product_name', price = '$price', quantity = '$quantity'
            WHERE id = $id";
    }
        

#DERETE
public function delete($id){
        $sql = "DELETE FROM products WHERE id = $id";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        } else {
            die('Error deleting the product: ' . $this->conn->error);
        }
    }
}
?>
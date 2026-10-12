<?php
session_start();

// フォームが送信されたときの処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once "../classes/Products.php";
    $product_obj = new Products;
    $product_obj->store($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">

     <!-- custom css-->
      <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <div class="container mt-5 w-100">
        <div class="row justify-content-center">
            <div class="col-6">    
                <div class="card p-4">
                    <div class="text-center mb-4 ms-4">
                        <div class="d-flex align-items-center text-info fs-1 mb-2">
                            <i class="fa-solid fa-box"></i>
                        <h2 class="text-info fw-bold">Add Product</h2>
                        </div>
                    </div>

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control" required autofocus>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="price" class="form-label text-muted">Price</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" name="price" id="price" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="quantity" class="form-label text-muted">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" required>
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-info text-white fw-bold">Add</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
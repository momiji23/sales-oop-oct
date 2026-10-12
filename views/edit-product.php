<?php
session_start();
    require_once "../classes/Products.php";

    $product_obj = new Products;

    $product = $product_obj->getProduct($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
<!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">

      <!-- custom css-->
      <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

<nav class="navbar navbar-expand" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <i class="fa-solid fa-house fa-lg"></i>
            </a>

            <div class="mx-auto">
                <span class="navbar-text text-dark fw-bold"><?php= $_SESSION['full_name'] ?></span>
            </div>

            <div class="navbar-nav">
                <span class="navbar-text"><? = $_SESSION ['full_name'] . " " . $_SESSION['id'] ?></span>
                <form action="../actions/logout.php" method="post" class="d-flex align-items-center">
                <button type="submit" class="text-danger bg-transparent border-0">
                         <i class="fa-solid fa-user-xmark fa-lg"></i>
                </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-warning">
                <div class="card shadow border-0"></div>
                    <h2 class="text-center text-uppercase mb-4"><i class="fa-sharp fa-solid fa-pen-to-square"></i>Edit Product</h2>
                </div>
            </div>

            <form action="../actions/edit-product.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product['product_name'] ?>" required autofocus>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="price" class="form-label">Price</label>
                    <div class= "input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" name="price" id="price" class="form-control" value="<?= $price['price'] ?>"required>
                    </div>
                </div>
                <div class="col-6">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control mt-2" value="<?= $quantity['quantity'] ?>"required>
                </div>
            </div>
            <br>
            <button type="submit" name="bnt_submit" class="bg-warning form-control">Edit</button>
        </form>
    </div>
</main>

</body>
</html>



        
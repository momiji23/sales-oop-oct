<?php
session_start();

require_once "../classes/Products.php";
require_once "../classes/Users.php";

$products_obj = new Products;

$all_products = $products_obj->getallProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <span class="navbar-text text-dark fw-bold">Welcome, <?php= $_SESSION['full_name'] ?></span>
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

    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="text-uppercase">Product List</h2>                   
                <a href="add-product.php" class="fs-2 fw-bold text-info">
                    <i class="fa-solid fa-regular fa-plus"></i>
                </a>
            </div>
       

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th><!-- actionbottan--></th>
                        <th> <!-- actionbottan--></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($product = $all_products->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td><a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">
                            <i class="fa-solid fa-pen"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete-product.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
              
                </tbody>
            </table>
        </div>
</body>
</html>
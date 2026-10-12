<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
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
     
    
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="text-uppercase">Product List</h2>                   
                <a href="add-product.php" class="fs-2 fw-bold text-info">
                    <i class="fa-solid fa-regular fa-plus"></i>
                </a>
            </div>
        


        <div class="col card bg-dark text-center">
            <div class="mt-4">
                <h4 class="text-danger text-uppercase">No Records Found</h4>
                 <i class="fa-regular fa-circle-xmark text-danger fa-5x mb-4"></i>
            </div>
        </div>
     </main>
</body>
</html>
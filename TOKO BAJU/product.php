<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - <?= htmlspecialchars($product['nama']) ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('php/navbar.php'); ?>


    
    <div class="container-product">
        <h1>Products</h1>
        <div id="root" class="card1" ></div>
        <!-- <div id="cartItems" class="cart"></div> -->
        <div id="total" class="total"></div>
    </div>


    <?php include 'php/footer.php'; ?>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>

    <!-- Custom JavaScript -->
    <script src="js/js.js"></script>
    <script>
    const email = localStorage.getItem('email');
    const password = localStorage.getItem('password');

    // Jika tidak ada, redirect ke login.php
    if (!email || !password) {
      window.location.href = 'login.php';
    } 
  </script>
</body>

</html>
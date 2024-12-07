<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - <?= htmlspecialchars($product['nama']) ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/sty.css" />
    <style>
        #root {
            display: none;
        }
    </style>

</head>

<body>
    <?php include('php/navbar.php'); ?>

    <div id="root"></div>

    <div class="container-product">
        <h1>Products</h1>
        <div id="root1" class="card1"></div>
        <!-- <div id="cartItems" class="cart"></div> -->
        <div id="total" class="total"></div>
    </div>


    <?php include 'php/footer.php'; ?>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>

    <!-- Custom JavaScript -->
    <script src="js/test.js"></script>
    <script>
        // Cek apakah user sudah login dengan data di localStorage
        const storedUsername = localStorage.getItem('username');
        const storedPassword = localStorage.getItem('password');

        if (!storedUsername || !storedPassword) {
            // Jika tidak ada data login, kembali ke login page
            alert('Anda belum login! Mengarahkan ke halaman login...');
            window.location.href = "login.php";
        }
    </script>
</body>

</html>
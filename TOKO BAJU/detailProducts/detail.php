<?php
// Pastikan untuk memasukkan koneksi database atau file konfigurasi yang diperlukan
// include '../config.php'; // Sesuaikan path


// Ambil ID produk dari parameter URL
$productId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Data produk simulasi (ganti dengan query database sebenarnya)
$products = [
  1 => [
    "id" => 1,
    "nama" => "Blue Shirt",
    "description" => "Kemeja Biru premium dengan bahan berkualitas tinggi",
    "harga" => 30000,
    "gambar" => "../img/menu/kemejaBiru.jpg",
    "detail" => "Kemeja biru elegan cocok untuk acara formal maupun kasual. Dibuat dari bahan katun berkualitas."
  ],
  2 => [
    "id" => 2,
    "nama" => "Blue T-Shirt",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "../img/menu/kaosbiru.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari.",
  ],
  [
    "id" => 3,
    "nama" => "Cream Shorts",
    "description" => "Kaos Biru casual",
    "harga" => 50000,
    "gambar" => "../img/menu/CelanaPndekCream.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari."
  ],
  [
    "id" => 4,
    "nama" => "Magenta Shirt",
    "description" => "Kaos Biru casual",
    "harga" => 35000,
    "gambar" => "../img/menu/kemejamagenta.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari."    
  ],
  [
    "id" => 5,
    "nama" => "Black T-Shirt",
    "description" => "Kaos Biru casual",
    "harga" => 30000,
    "gambar" => "../img/menu/KaosHitam.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari."   
  ],
  [
    "id" => 6,
    "nama" => "Black Shorts",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "../img/menu/CelanaPndekHitam.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 7,
    "nama" => "Blue trousers",
    "description" => "Kaos Biru casual",
    "harga" => 50000,
    "gambar" => "img/menu/celana_panjang_biru.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 9,
    "nama" => "Black trousers",
    "description" => "Kaos Biru casual",
    "harga" => 50000,
    "gambar" => "img/menu/celana_panjang_hitam.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 10,
    "nama" => "black suit",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/jas_black_mamba.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 11,
    "nama" => "pink suit",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/jas_pink_bunny.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 12,
    "nama" => "green shirt",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/kemeja_hijau_mint.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 13,
    "nama" => "black shirt",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/kemeja_hitam.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ]
  // Tambahkan produk lainnya sesuai dengan data di products.php
];

// Cari produk berdasarkan ID
$product = isset($products[$productId]) ? $products[$productId] : null;

if (!$product) {
  die("Produk tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="id">

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
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="detailProducts/style.css" />

</head>

<body>
  <!-- Navbar -->
  <?php include '../php/navbar.php'; ?>



  <main>
    <div class="product-detail">
      <div class="product-image">
        <../img src="<?= htmlspecialchars($product['gambar']) ?>" alt="<?= htmlspecialchars($product['nama']) ?>">
      </div>
      <div class="product-info">
        <div class="product-header">
          <h1 class="product-name"><?= htmlspecialchars($product['nama']) ?></h1>
          <p class="product-price">IDR <?= number_format($product['harga'], 0, ',', '.') ?></p>
        </div>
        <p class="product-description">
        <?= htmlspecialchars($product['detail']) ?>
        </p>
        
          <div id="button-add" >Add to Cart</div>
        
        
      </div>
    </div>
  </main>


  <!-- Footer -->
  <?php include '../php/footer.php'; ?>

  <script src="../js/script.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>
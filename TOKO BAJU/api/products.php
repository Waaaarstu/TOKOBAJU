<?php
header('Access-Control-Allow-Origin: *'); // Or specify your exact domain
header('Content-Type: application/json; charset=utf-8');

// Data produk simulasi (dapat diganti dengan query database)
$products = [
  1 => [
    "id" => 1,
    "nama" => "Blue Shirt",
    "size" => "Size = XXL",
    "description" => "Kemeja Biru premium dengan bahan berkualitas tinggi",
    "harga" => 30000,
    "gambar" => "img/menu/kemejaBiru.jpg",
    "detail" => "Kemeja biru elegan cocok untuk acara formal maupun kasual. Dibuat dari bahan katun berkualitas."
  ],
  2 => [
    "id" => 2,
    "nama" => "Blue T-Shirt",
    "size" => "Size = M",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/kaosbiru.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari.",
  ],
  [
    "id" => 3,
    "nama" => "Cream Shorts",
    "size" => "Size = 30",
    "description" => "Kaos Biru casual",
    "harga" => 50000,
    "gambar" => "img/menu/CelanaPndekCream.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari."
  ],
  [
    "id" => 4,
    "nama" => "Magenta Shirt",
    "size" => "Size = XL",
    "description" => "Kaos Biru casual",
    "harga" => 35000,
    "gambar" => "img/menu/kemejamagenta.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari."    
  ],
  [
    "id" => 5,
    "nama" => "Black T-Shirt",
    "size" => "Size = L",
    "description" => "Kaos Biru casual",
    "harga" => 30000,
    "gambar" => "img/menu/KaosHitam.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari."   
  ],
  [
    "id" => 6,
    "nama" => "Black Shorts",
    "size" => "Size = XL",
    "description" => "Kaos Biru casual",
    "harga" => 45000,
    "gambar" => "img/menu/CelanaPndekHitam.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 7,
    "nama" => "Blue trousers",
    "size" => "Size = 35",
    "description" => "Kaos Biru casual",
    "harga" => 50000,
    "gambar" => "img/menu/celana_panjang_biru.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 8,
    "nama" => "Black trousers",
    "size" => "Size = 35",
    "description" => "Kaos Biru casual",
    "harga" => 50000,
    "gambar" => "img/menu/celana_panjang_hitam.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 9,
    "nama" => "black suit",
    "size" => "Size = XX",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/jas_black_mamba.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 10,
    "nama" => "pink suit",
    "size" => "Size = XX",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/jas_pink_bunny.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 11,
    "nama" => "green shirt",
    "size" => "Size = XL",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/kemeja_hijau_mint.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ],
  [
    "id" => 12,
    "nama" => "black shirt",
    "size" => "Size = XXXL",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/kemeja_hitam.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari." 
  ]
  // Tambahkan produk lainnya sesuai dengan data di products.php
];
if (isset($_GET['q'])) {
  $query = strtolower(trim($_GET['q'])); // Normalisasi input pencarian
  $filteredProducts = array_filter($products, function($product) use ($query) {
      return strpos(strtolower($product['nama']), $query) !== false; // Pencarian case-insensitive
  });

  echo json_encode(array_values($filteredProducts)); // Kembalikan hasil pencarian
  exit;
}

// Kembalikan semua produk jika tidak ada parameter 'q'
echo json_encode(array_values($products));
exit;

?>

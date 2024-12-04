<?php
header('Access-Control-Allow-Origin: *'); // Or specify your exact domain
header('Content-Type: application/json; charset=utf-8');

// Data produk simulasi (dapat diganti dengan query database)
$products = [
  [
    "id" => 1,
    "nama" => "Blue shirt",
    "ukuran" => "XXL",
    "description" => "Kemeja Biru premium dengan bahan berkualitas tinggi",
    "harga" => 30000,
    "gambar" => "img/menu/kemejaBiru.jpg",
    "detail" => "Kemeja biru elegan cocok untuk acara formal maupun kasual. Dibuat dari bahan katun berkualitas."
  ],
  [
    "id" => 2,
    "nama" => "Blue T-Shirt",
    "ukuran" => "M",
    "description" => "Kaos Biru casual",
    "harga" => 40000,
    "gambar" => "img/menu/kaosbiru.jpg",
    "detail" => "T-shirt nyaman dengan warna biru yang fresh, pas untuk gaya sehari-hari.",
  ],
  [
    "id" => 3,
    "nama" => "Cream Shorts",
    "ukuran" => "30",
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
    "harga" => 40000,
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
// Cek apakah parameter ID diberikan
if (isset($_GET['id'])) {
  $productId = intval($_GET['id']);
  
  // Cari produk berdasarkan ID
  if (isset($products[$productId])) {
    echo json_encode($products[$productId]);
    exit;
  } else {
    http_response_code(404);
    echo json_encode(["error" => "Produk tidak ditemukan"]);
    exit;
  }
} else {
  // Jika tidak ada ID, kembalikan semua produk
  echo json_encode(array_values($products));
  exit;
}
?>

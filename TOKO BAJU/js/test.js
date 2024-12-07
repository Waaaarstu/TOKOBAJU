//toggle class active
const navbarnav = document.querySelector(".navbar-nav");
// keitka hamburger di klick
document.querySelector("#hamburger-menu").onclick = () => {
  navbarnav.classList.toggle("active");
};
// klick di luar slide bar untuk menghilangkan nav
const hamburger = document.querySelector("#hamburger-menu");
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarnav.contains(e.target)) {
    navbarnav.classList.remove("active");
  }
});

document.querySelector("#shopping-cart-toggle").onclick = () => {
  document.querySelector("#shopping-cart").classList.toggle("active");
};

// Close the shopping cart when clicking outside
document.addEventListener("click", function (e) {
  const cartToggle = document.querySelector("#shopping-cart-toggle");
  const cartElement = document.querySelector("#shopping-cart");
  if (!cartToggle.contains(e.target) && !cartElement.contains(e.target)) {
    cartElement.classList.remove("active");
  }
});

function redirWhatsapp() {
  location.assign("https://wa.me//+6287855253572");
}
function showAlert() {
  alert("Barang Berhasil Ditambahkan");
}

// Variabel global
let cart = [];
let products = [];

// Ambil data produk dari REST API PHP
fetch("./api/products.php")
  // Pastikan path API sudah sesuai
  .then((response) => {
    if (!response.ok) {
      throw new Error("Failed to fetch products");
    }
    return response.json();
  })
  .then((data) => {
    products = data; // Simpan data produk ke dalam variabel global
    renderProducts(); // Render produk ke dalam elemen HTML
  })
  .catch((error) => console.error("Error fetching products:", error));

fetch("./api/products.php")
  // Pastikan path API sudah sesuai
  .then((response) => {
    if (!response.ok) {
      throw new Error("Failed to fetch products");
    }
    return response.json();
  })
  .then((data) => {
    products = data; // Simpan data produk ke dalam variabel global
    renderAllProducts(); // Render produk ke dalam elemen HTML
  })
  .catch((error) => console.error("Error fetching products:", error));

fetch("./api/products.php")
  // Pastikan path API sudah sesuai
  .then((response) => {
    if (!response.ok) {
      throw new Error("Failed to fetch products");
    }
    return response.json();
  })
  .then((data) => {
    products = data; // Simpan data produk ke dalam variabel global
    renderButtonProducts();
  })
  .catch((error) => console.error("Error fetching products:", error));

// Fungsi untuk merender produk ke dalam elemen dengan ID "root"
function renderProducts() {
    const root = document.getElementById("root");
    const maxProducts = 6; // Batas jumlah produk yang ditampilkan
    const limitedProducts = products.slice(0, maxProducts); // Ambil hanya 6 produk pertama
  
    root.innerHTML = limitedProducts
      .map((product) => {
        const { id, gambar, nama, harga } = product;
        return `
              <div class="row-card" id="cart-items">
                  <a class="fashion-card" href="detail.php?id=${id}">
                      <div class="fashion-card-content">
                          <img src="${gambar}" alt="${nama}" class="fashion-card-img" onclick="showProductDetail(${id})" />
                          <h3 class="fashion-card-title">-${nama}-</h3>
                          <p class="fashion-card-price">IDR ${harga}</p>
                      </div>
                  </a>
                  <button class='add-to-cart' onclick='addToCart(${id})'>Add to Cart</button>
              </div>
          `;
      })
      .join("");
  }
  

function renderAllProducts() {
  const root = document.getElementById("root1");
  root.innerHTML = products
    .map((product) => {
      const { id, gambar, nama, harga } = product;
      return `
            <div class="row-card" id="cart-items">
                <a class="fashion-card" href="detail.php?id=${id}">
                    <div class="fashion-card-content">
                        <img src="${gambar}" alt="${nama}" class="fashion-card-img" onclick="showProductDetail(${id})" />
                        <h3 class="fashion-card-title">-${nama}-</h3>
                        <p class="fashion-card-price">IDR ${harga}</p>
                    </div>
                </a>
                <button class='add-to-cart' onclick='addToCart(${id})'>Add to Cart</button>
            </div>
        `;
    })
    .join("");
}

function getProductIdFromUrl() {
  const params = new URLSearchParams(window.location.search);
  return parseInt(params.get("id"), 10); // Mengambil parameter "id" sebagai angka
}

// Fungsi untuk merender tombol produk berdasarkan ID
function renderButtonProducts() {
  const root = document.getElementById("button-add");
  const productId = getProductIdFromUrl(); // Ambil ID dari URL

  // Cari produk berdasarkan ID
  const product = products.find((product) => product.id === productId);

  if (product) {
    // Jika produk ditemukan, tampilkan tombol
    root.innerHTML = `
        <button class='add-to-cart' onclick='addToCart(${product.id})' id='addToCart' >
          Add to Cart 
        </button>
      `;
  } else {
    // Jika tidak ada produk dengan ID tersebut
    root.innerHTML = "<p>Product not found!</p>";
  }
}

// renderButtonProducts();
function addToCart(productId) {
  alert(`Product ${productId} added to cart!`);
}

// Fungsi untuk menambahkan produk ke keranjang
// Variabel global
// let cart = [];
// let products = [];

// Fungsi untuk memuat produk dan inisialisasi
function initializeApp() {
  // Muat produk dari localStorage jika tersedia
  const savedCart = JSON.parse(localStorage.getItem("cart")) || [];
  cart = savedCart;

  // Ambil data produk dari REST API PHP
  fetch("./api/products.php")
    .then((response) => {
      if (!response.ok) {
        throw new Error("Failed to fetch products");
      }
      return response.json();
    })
    .then((data) => {
      products = data; // Simpan data produk ke dalam variabel global
      renderProducts(); // Render produk ke dalam elemen HTML
      displayCart(); // Tampilkan keranjang yang tersimpan
    })
    .catch((error) => {
      console.error("Error fetching products:", error);
      //   alert('Gagal memuat produk');
    });
}

// Fungsi untuk menambahkan produk ke keranjang
function addToCart(productId) {
  // Pastikan products array tersedia
  if (!products || products.length === 0) {
    console.error("Produk tidak ditemukan");
    return;
  }

  // Temukan produk berdasarkan ID
  const product = products.find((item) => item.id === productId);

  if (!product) {
    console.error("Produk tidak ditemukan dengan ID:", productId);
    return;
  }

  // Ambil keranjang dari localStorage
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // Cari apakah produk sudah ada di keranjang
  const existingItemIndex = cart.findIndex((item) => item.id === productId);

  if (existingItemIndex > -1) {
    // Jika produk sudah ada, tingkatkan kuantitas
    cart[existingItemIndex].qty += 1;
  } else {
    // Jika produk baru, tambahkan ke keranjang dengan qty 1
    cart.push({
      ...product,
      qty: 1,
    });
  }

  // Simpan kembali ke localStorage
  try {
    localStorage.setItem("cart", JSON.stringify(cart));
    console.log("Cart berhasil disimpan:", cart);

    // Perbarui tampilan keranjang
    displayCart();

    alert("Barang Berhasil Ditambahkan");
  } catch (error) {
    console.error("Gagal menyimpan ke localStorage:", error);
    alert("Gagal menambahkan barang ke keranjang");
  }
}

// Fungsi untuk menampilkan keranjang
function displayCart() {
  // Ambil data keranjang dari localStorage
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  console.log("Keranjang saat ini:", cart); // Debug log

  let total = 0;
  document.getElementById("count").innerHTML = cart.length;

  if (cart.length === 0) {
    document.getElementById("cartItems").innerHTML = "Keranjang Anda kosong";
    document.getElementById("total").innerHTML = "IDR 0.00";
    document.getElementById("cartEmpty").style.display = "block";
  } else {
    document.getElementById("cartItems").innerHTML = cart
      .map((item, index) => {
        const { gambar, nama, harga, qty, id } = item;
        total += harga * qty;
        return `
          <div class="cart-item">
            <div class="cart-item-content">
              <a href="detailProducts/index.php?id=${id}">  
                <img src="${gambar}" alt="${nama}" class="fashion-cart-img" />
              </a>
              <h3 class="fashion-card-title padding">${nama}</h3>
              <p class="fashion-card-price padding">IDR ${harga}</p>
              <p class="fashion-card-qty padding">Qty: ${qty}</p>
              <button class='remove padding' onclick='removeFromCart(${index})'></button>   
              </div>
          </div>
        `;
      })
      .join("");

    document.getElementById("total").innerHTML = "Total: IDR " + total + ".00";
    document.getElementById("total").style.color = "black";
    document.getElementById("cartEmpty").style.display = "none";
  }
}

// Jalankan inisialisasi saat halaman dimuat
document.addEventListener("DOMContentLoaded", initializeApp);
// Fungsi untuk menghapus item dari keranjang
function removeFromCart(index) {
  // Ambil keranjang dari localStorage
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // Jika item memiliki qty lebih dari 1, kurangi qty
  // Jika qty adalah 1, hapus item sepenuhnya
  if (cart[index].qty > 1) {
    cart[index].qty -= 1;
  } else {
    // Hapus item dari array
    cart.splice(index, 1);
  }

  // Simpan kembali ke localStorage
  try {
    localStorage.setItem("cart", JSON.stringify(cart));

    // Perbarui tampilan keranjang
    displayCart();

    console.log("Item berhasil dihapus:", cart);
  } catch (error) {
    console.error("Gagal menghapus item dari keranjang:", error);
    alert("Gagal menghapus barang dari keranjang");
  }
}

// Fungsi untuk melakukan checkout via WhatsApp
function checkout() {
  if (cart.length === 0) {
    alert("Keranjang kosong, silakan tambahkan barang terlebih dahulu!");
    return;
  }

  let message = "Halo, saya ingin memesan:\n";
  let totalHarga = 0;

  cart.forEach((item) => {
    message += `- ${item.nama} (x${item.qty}) - IDR ${item.harga * item.qty}\n`;
    totalHarga += item.harga * item.qty;
  });

  message += `\nTotal: IDR ${totalHarga}.00\n`;
  message += "Terima kasih!";

  const whatsappUrl = `https://wa.me/6287855253572?text=${encodeURIComponent(
    message
  )}`;
  window.open(whatsappUrl, "_blank");
}

// Event Listener untuk membuka kotak pencarian
// Menampilkan kotak pencarian saat tombol search diklik
// Search Icon Click Event
document.getElementById("search-icon").addEventListener("click", () => {
    const searchContainer = document.getElementById("search-container");
    searchContainer.style.display = "flex"; // Use flex to center the search container
});

// Function to Close Search
function closeSearch() {
    const searchContainer = document.getElementById("search-container");
    searchContainer.style.display = "none"; // Hide search
    document.getElementById("search-results").innerHTML = ""; // Clear search results
    document.getElementById("search-input").value = ""; // Reset search input
}

// Search Input Event Listener
document.getElementById("search-input").addEventListener("input", (e) => {
    const query = e.target.value;
    if (query.length >= 2) {
        searchProducts(query); // Call search function
    } else {
        document.getElementById("search-results").innerHTML = ""; // Clear results if query is too short
    }
});

// Search Products Function
async function searchProducts(query) {
    const resultsContainer = document.getElementById("search-results");
    try {
        const response = await fetch(
            `./api/products.php?q=${encodeURIComponent(query)}`,
            {
                method: "GET",
                cache: "no-cache",
            }
        );

        if (!response.ok) throw new Error("Failed to fetch data");

        const products = await response.json();

        if (products.length === 0) {
            // Display message if no products found
            resultsContainer.innerHTML = "Tidak ada produk ditemukan.";
            resultsContainer.innerHTML.color = "red";
        } else {
            resultsContainer.innerHTML = products
                .map(
                    (product) => `
                    <div class="product-item1">
                        <a href="detail.php?id=${product.id}">
                            <img src="${product.gambar}" alt="${product.nama}" class="product-image1" />
                            <div class="product-info1">
                                <h4>${highlightSearchTerm(product.nama, query)}</h4>
                                <p>Rp ${product.harga}</p>
                            </div>
                        </a>
                    </div>
                `
                )
                .join("");
        }
    } catch (error) {
        resultsContainer.innerHTML = "Terjadi kesalahan. Silakan coba lagi.";
        console.error(error);
    }
}

// Function to Highlight Search Term
function highlightSearchTerm(text, query) {
    const regex = new RegExp(`(${query})`, "gi");
    return text.replace(regex, "<mark>$1</mark>");
}

document.getElementById("whatsappForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah pengiriman default formulir
  
    // Ambil nilai dari input
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
  
    // Pastikan semua input diisi
    if (!name || !email || !phone) {
      alert("Harap isi semua bidang.");
      return;
    }
  
    // Nomor WhatsApp tujuan
    const whatsappNumber = "+6287855253572";
  
    // Pesan yang akan dikirim
    const message = `Halo, saya ${name}.\nEmail: ${email}\nNo HP: ${phone}.\nSaya ingin bertanya lebih lanjut.`;
  
    // Buat URL WhatsApp
    const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
  
    // Arahkan pengguna ke URL WhatsApp
    window.open(whatsappURL, "_blank");
  });
  
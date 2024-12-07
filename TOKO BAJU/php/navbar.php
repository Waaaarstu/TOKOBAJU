<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Busana Kita</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/sty.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <a href="http://localhost/TOKO%20BAJU" class="navbar-logo">fashion<span>say'it</span>.</a>
    <div class="navbar-nav">
      <a href="/TOKO%20BAJU#home" class="nav-link">Home</a>
      <a href="/TOKO%20BAJU#about" class="nav-link">Tentang Kami</a>
      <a href="/TOKO%20BAJU#fashion" class="nav-link">Products</a>
      <a href="/TOKO%20BAJU#contact" class="nav-link">Contact</a>
    </div>
    <div class="navbar-extra">
      <a href="#" id="search-icon"><i data-feather="search">

      </i></a>
      <div id="shopping-cart-toggle" class="cart-flex">
        <i data-feather="shopping-cart" id="cart"></i>
        <span id="count">0</span>
      </div>
      <p id="hamburger-menu"><i data-feather="menu"></i></p>
      <br>
      <a>
        <a href="#" id="logout" onclick="logout()">Logout</a>
      </a>
      <!-- <div id="search-icon" class="search-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
      </div> -->
    </div>
  </nav>
  <!-- Navbar End -->
  <div class="search-wrapper">
    <!-- Search Icon -->


    <!-- Search Container -->
    <div id="search-container" class="search-container">
      <div class="search">

        <div class="search-header">
          <input type="text" id="search-input" placeholder="Cari produk..." autocomplete="off">
          <button onclick="closeSearch()" class="close-btn">&times;</button>
        </div>
        
        <div id="search-results" class="search-results">
          <!-- Search results will be dynamically populated here -->
        </div>
      </div>
    </div>
  </div>

  <!-- Search Container -->
  <!-- Tombol Search -->





  <!-- Search Container End -->

  <!-- Shopping Cart -->
  <nav class="nav-cart">
    <div id="shopping-cart" class="shopping-cart">
      <div class="shop-container">
        <div class="shop">
          <h2 class="shop-judul">Shopping Cart</h2>
          <div class="shop-empty">
            <img src="img/emptycart.webp" alt="Cart Empty" class="cart-img" id="cartEmpty" />
            <div id="cartItems">Your cart is empty</div>
          </div>
        </div>
        <div class="shop-total">
          <h2>Order Summary</h2>
          <div id="total" class="total">IDR 0.00</div>
          <button id="checkout" class="button-chekout" onclick="checkout()">Checkout</button>
        </div>
      </div>
    </div>
  </nav>
  <!-- Shopping Cart End -->

  <script src="../js/test.js"></script>
</body>

</html>
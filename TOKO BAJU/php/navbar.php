<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Busana Kita</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
<body>
<nav class="navbar">
      <a href="http://localhost/TOKO%20BAJU" class="navbar-logo">fashion<span>say'it</span>.</a>
      <div class="navbar-nav">
        <a href="#home" class="nav-link">home</a>
        <a href="#about" class="nav-link">tentang kami</a>
        <a href="#fashion" class="nav-link">products</a>
        <a href="#contact" class="nav-link">contact</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <div href="" id="shopping-cart-toggle" class="cart-flex">
          <i data-feather="shopping-cart" id="cart"></i>
          <span id="count">0</span>
        </div>
        <p href="#" id="hamburger-menu"><i data-feather="menu"></i></p>
        <br>
        <li>
        <a href="#" id="logout" onclick="logout()">Logout</a>
        </li>
      </div>
    </nav>
    <!-- Navbar End -->
    <nav class="nav-cart">
      <div id="shopping-cart" class="shopping-cart">
        <div class="shop-container">
          <div class="shop">
            <h2 class="shop-judul">Shopping Cart</h2>
            <div class="shop-empty">
              <img
                src="img/emptycart.webp"
                alt="Cart Empty"
                style="none"
                class="cart-img"
                id="cartEmpty"
              />
              <div id="cartItems">Your cart is empty</div>
              <button class='remove padding' onclick='removeFromCart(${index})'>Hapus</button>
            </div>
          </div>
          <div class="shop-total">
            <h2>Order Summary</h1>
            <div id="total" class="total">IDR 0.00</div>
            <button id="checkout" class="button-chekout" onclick="checkout()">
              Checkout
            </button>
          </div>
        </div>
      </div>
    </nav>
    <script src="../js/script.js"></script>
</body>
</html>
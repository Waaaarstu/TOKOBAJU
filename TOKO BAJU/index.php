<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>fashion say'it</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <!-- Navbar Start -->
  <?php include 'php/navbar.php'; ?>
  <!-- Navbar End -->
  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
      <!-- <img src="img/WAIFUGUWEHCUY.jpg" alt="Hero" class="hero-img" /> -->
      <h1>let's styling your <span>outfit</span></h1>
      <p>
        Kesempatan tidak datang dua kali. Lebih baik nyesel beli, dari pada
        nyesel tidak beli engga sihh..
      </p>
      <a href="product.php" class="cta">buy now</a>
    </main>
  </section>
  <!-- hero section end -->

  <!-- about section start -->
  <section id="about" class="about">
    <h2><span>tentang</span> kami</h2>

    <div class="row-about">
      <div class="about-img">
        <img src="img/fotobareng.jpg" alt="Tentang Kami" />
      </div>
      <div class="content">
        <h3>kenapa harus memilih busana kami?</h3>
        <p>
          Dengan desain yang modis dan bahan premium, busana kami akan
          memberikan penampilan yang elegan dan penuh percaya diri, untuk Anda
          yang mengutamakan kualitas.
        </p>
        <p>
          Kami berkomitmen untuk memberikan busana dengan desain inovatif,
          yang tidak hanya mengikuti tren, tetapi juga memberikan kesan yang
          abadi.
        </p>
      </div>
    </div>
  </section>
  <!-- about section end -->
  <div id="product-list"></div>
  <!-- About Section End -->
  <section>
    <div class="container">
      <div id="fashion" class="fashion">
        <h2><span>products</span> kami</h2>
        <p id="product-description">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Consectetur possimus repellat debitis accusamus.
        </p>
      </div>
      <div>
        <a href="product.php">
          <button class="lihat-semua">Lihat Semua</button>
        </a>


        <div id="root" class="card1"></div>
        <!-- <div id="cartItems" class="cart"></div> -->
        <div id="total" class="total"></div>
      </div>
    </div>

  </section>

  <!-- Contact Section Start  -->
  <section id="contact" class="contact">
    <h2><span>contact</span> kami</h2>
    <p id="product-description">

    </p>
    <div class="row">
      <div class="map-input">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0022599156387!2d106.90846238900754!3d-6.2634310600895935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f32af6703c71%3A0xf89cd7f58da5243f!2sUniversitas%20BSI%20Kampus%20Jatiwaringin!5e0!3m2!1sid!2sid!4v1731213697398!5m2!1sid!2sid"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <form action="https://wa.me//+6287855253572">
          <pre class="pre">
                <div class="input-grup">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama " required>
                </div>
                <div class="input-grup">
                    <i data-feather="mail"></i>
                    <input type="email" placeholder="email" required>
                </div>
                <div class="input-grup" >
                    <i data-feather="phone"></i>
                    <input type="number" placeholder="no hp" required>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn">
            </pre>
        </form>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->

  <!-- Footer Start -->
  <?php include 'php/footer.php'; ?>
  <!-- Footer End -->

  <!-- login start-->
  <?php
session_start();
// Dummy username dan password yang terdaftar di database
$registered_username = "user";
$registered_password = "password";

// Jika form login di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password sesuai
    if ($username == $registered_username && $password == $registered_password) {
        // Set session untuk pengguna yang login
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Redirect ke halaman dashboard atau halaman lainnya
        exit();
    } else {
        echo "Username atau password salah!";
    }
}
?>

  <!-- login end-->

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace();
  </script>

  <!-- Custom JavaScript -->
  <script src="js/js.js"></script>
  <script>
    
    // Fungsi logout
    function logout() {
      localStorage.removeItem('username');
      localStorage.removeItem('password');

      window.location.href = "login.php"; //balik ke laman login
    }
    
    // Cek apakah user sudah login dengan data di localStorage
    const storedUsername = localStorage.getItem('username');
    const storedPassword = localStorage.getItem('password');

    if (!storedUsername || !storedPassword) {
      // Jika tidak ada data login, kembali ke login page
      alert('Anda belum login! Mengarahkan ke halaman login...');
      window.location.href = "login.php";
    }
  </script>
  <script>
    // buat username dari localStorage dan menampilkannya
    const username = localStorage.getItem('username');
    document.getElementById('usernameDisplay').innerText = username : 'Guest';
  </script>

</body>
ame ? u
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', Arial, sans-serif;
            background-image: url("./img/hunters-race-hNoSCxPWYII-unsplash.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-attachment: fixed;
        }

        .container {
            /* Background transparan dengan efek blur,
                Lebar maksimum 400px,
                ujung"nya membulat */
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .foto img {
            height: 150px;
            width: auto;
            margin-bottom: 20px;
        }

        .container-logo {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.9);
            font-style: italic;
            margin-bottom: 20px;
        }

        .container-logo span {
            color: #0056b3;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .link {
            margin-top: 15px;
            font-size: 14px;
        }

        .link a {
            color: #0056b3;
            text-decoration: none;
            font-weight: bold;
        }

        /* untuk menghilangkan garis bawah */
        .link a:hover {
            text-decoration: none;
        }

        /*  */

        .link p {
            font-size: medium;
        }

        h3 {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            color: #ffffff;
            font-style: italic;
            margin-bottom: 20px;
        }

        h3 span {
            color: #0056b3;
        }

        /* Media Queries for Responsiveness */
        @media screen and (max-width: 600px) {
            .container {
                margin: 20px;
                padding: 20px;
                width: calc(100% - 40px);
            }

            .foto img {
                height: 100px;
            }

            .container-logo,
            h3 {
                font-size: 1.5rem;
            }

            input[type="text"],
            input[type="password"],
            button {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 380px) {
            .container {
                margin: 10px;
                padding: 15px;
                width: calc(100% - 20px);
            }

            .foto img {
                height: 80px;
            }

            .container-logo,
            h3 {
                font-size: 1.2rem;
            }

            input[type="text"],
            input[type="password"],
            button {
                font-size: 12px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container" id="loginContainer">
        <nav class="foto">
            <img src="./img/hydro-removebg-preview.png" alt="logo">
        </nav>
        <h3 class="container-logo">fashion<span>say'it</span>.</h3>
        <form id="loginForm" onsubmit="login(event)">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="link">
            <p>Belum punya akun?</p>
            <a href="#" onclick="showRegister()">Daftar disini</a>
        </div>
    </div>

    <div class="container" id="registerContainer" style="display:none;">
        <nav class="foto">
            <img src="./img/hydro-removebg-preview.png" alt="logo">
        </nav>
        <h3>Registrasi<span>account</span></h3>
        <form id="registerForm" onsubmit="register(event)">
            <input type="text" id="newUsername" placeholder="Username" required>
            <input type="password" id="newPassword" placeholder="Password" required>
            <button type="submit">Daftar</button>
        </form>
        <div class="link">
            <p>Sudah punya akun?</p>
            <a href="#" onclick="showLogin()">Login disini</a>
        </div>
    </div>

    <script>
        function showRegister() {
            document.getElementById('loginContainer').style.display = 'none';
            document.getElementById('registerContainer').style.display = 'block';
        }

        function showLogin() {
            document.getElementById('registerContainer').style.display = 'none';
            document.getElementById('loginContainer').style.display = 'block';
        }

        function register(event) {
            event.preventDefault();
            const username = document.getElementById('newUsername').value.trim();
            const password = document.getElementById('newPassword').value.trim();

            if (!username || !password) {
                alert('Harap isi semua kolom.');
                return;
            }

            localStorage.setItem('username', username);
            localStorage.setItem('password', password);
            alert('Registrasi berhasil! Silakan login.');
            showLogin();
        }

        // Cek apakah user sudah login sebelumnya
        window.onload = function() {
            const storedUsername = localStorage.getItem('username');
            const storedPassword = localStorage.getItem('password');

            // Pastikan data login tersimpan di localStorage
            if (storedUsername && storedPassword) {
                const currentPage = window.location.pathname.split('/').pop();

                // Jika user berada di halaman login, arahkan ke index.php
                if (currentPage === 'login.html') {
                    window.location.href = "/TOKO%20BAJU/index.php";
                }
            }
        };

        function login(event) {
            event.preventDefault();
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const storedUsername = localStorage.getItem('username');
            const storedPassword = localStorage.getItem('password');

            if (username === storedUsername && password === storedPassword) {
                alert('Login berhasil! Mengarahkan ke halaman utama...');
                window.location.href = "/TOKO%20BAJU/index.php";
            } else {
                alert('Username atau password salah. Coba lagi.');
            }
        }
    </script>
</body>


</html>
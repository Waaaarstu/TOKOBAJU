<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
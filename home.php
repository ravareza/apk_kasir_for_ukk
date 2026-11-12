<?php
include 'koneksi.php';
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Aplikasi Kasir</title>
</head>
<body>
    <h2>Dashboard Aplikasi Kasir</h2>
    <p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b> (<?php echo $_SESSION['role']; ?>)</p>
    <ul>
        <li><a href="pendataan.php">Kelola Produk</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>

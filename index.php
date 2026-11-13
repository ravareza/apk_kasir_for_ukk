<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:home.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kasir</title>
</head>
<body>
        <h2>Selamat datang di aplikasi kasir</h2>
        <h3>Silakan Masuk ke Aplikasi</h3>
        <p>Klik tombol di bawah ini untuk melanjutkan</p>
            <a href="login.php">Login</a>
</body>
</html>
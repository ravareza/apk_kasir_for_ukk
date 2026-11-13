<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit();
}
$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Aplikasi Kasir</title>
</head>
<body>
    <div style="background-color: #000080; color: white; padding: 20px;">
        <h2>Dashboard Aplikasi Kasir</h2>
        <p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b> | Role: <b><?php echo $role; ?></b></p>
    </div>
    
    <div style="padding: 20px;">
        <?php if($role == 'Administrator'): ?>
            <!-- TAMPILAN KHUSUS ADMIN -->
            <h3>Panel Administrator</h3>
            <p>Anda memiliki akses penuh untuk mengelola sistem.</p>
            <ul>
                <li><a href="pendataan.php">Kelola Data & Stock Barang</a></li>
                <li><a href="regist.php">Tambah Akun Pengguna Baru</a></li>
            </ul>

        <?php else: ?>
            <!-- TAMPILAN KHUSUS PETUGAS -->
            <h3>Panel Petugas Kasir</h3>
            <p>Gunakan menu di bawah ini untuk operasional kasir.</p>
            <ul>
                <li><a href="pendataan.php">Cek & Update Stock Barang</a></li>
                <!-- Tambahkan menu transaksi di sini nanti jika sudah dibuat -->
            </ul>
        <?php endif; ?>

        <br>
        <hr>
        <p><a href="logout.php" style="color: red; text-decoration: none; font-weight: bold;">Logout dari Sistem</a></p>
    </div>
</body>
</html>
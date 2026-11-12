<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk - Aplikasi Kasir</title>
</head>
<body>
    <h2>Tambah Produk Baru</h2>
    <form action="tambah_aksi.php" method="POST">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="NamaProduk" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="Harga" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="number" name="Stock" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan"> <a href="pendataan.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
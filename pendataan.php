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
    <title>Data Produk - Aplikasi Kasir</title>
</head>
<body>
    <h2>Data Produk</h2>
    <p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b> (<?php echo $_SESSION['role']; ?>)</p>
    
    <a href="tambah.php">+ Tambah Produk</a> | <a href="home.php">Kembali ke Beranda</a>
    <br><br>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM produk");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['NamaProduk']; ?></td>
            <td>Rp <?php echo number_format($d['Harga'], 0, ',', '.'); ?></td>
            <td><?php echo $d['Stock']; ?></td>
            <td>
                <a href="change.php?id=<?php echo $d['ProdukID']; ?>">Edit</a> | 
                <a href="delete.php?id=<?php echo $d['ProdukID']; ?>&tabel=produk" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
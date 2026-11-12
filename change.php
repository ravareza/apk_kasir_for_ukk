<?php
include 'koneksi.php';
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE ProdukID='$id'");
while($d = mysqli_fetch_array($data)){
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk - Aplikasi Kasir</title>
</head>
<body>
    <h2>Edit Data Produk</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="ProdukID" value="<?php echo $d['ProdukID']; ?>">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="NamaProduk" value="<?php echo $d['NamaProduk']; ?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="Harga" value="<?php echo $d['Harga']; ?>" required></td>
            </tr>
            <tr>
                <td>Stock</td>
                <td>:</td>
                <td><input type="number" name="Stock" value="<?php echo $d['Stock']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan Perubahan"> <a href="pendataan.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php } ?>
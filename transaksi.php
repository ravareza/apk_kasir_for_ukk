<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit();
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Kasir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="<?php echo ($_SESSION['role'] == 'Administrator') ? 'header-admin' : 'header-petugas'; ?>">
        <h2>Form Transaksi Penjualan</h2>
        <p>Kasir: <b><?php echo $_SESSION['username']; ?></b></p>
    </div>

    <div class="container">
        <div class="card">
            <a href="<?php echo ($_SESSION['role'] == 'Administrator') ? 'home_admin.php' : 'home_petugas.php'; ?>" class="btn btn-secondary" style="margin-bottom: 20px;">&laquo; Kembali ke Dashboard</a>
            
            <h3>Pilih Produk</h3>
            <form action="proses_transaksi.php" method="POST">
                <table>
                    <tr>
                        <td>Pilih Produk</td>
                        <td>:</td>
                        <td>
                            <select name="ProdukID" required>
                                <option value="">-- Pilih Barang --</option>
                                <?php
                                $data = mysqli_query($koneksi, "SELECT * FROM produk WHERE stock > 0");
                                while($d = mysqli_fetch_array($data)){
                                    echo "<option value='".$d['ProdukID']."'>".$d['NamaProduk']." (Stok: ".$d['stock']." | Rp ".number_format($d['Harga'], 0, ',', '.').")</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td>
                        <td>:</td>
                        <td><input type="number" name="JumlahProduk" min="1" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" class="btn">Proses Transaksi</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
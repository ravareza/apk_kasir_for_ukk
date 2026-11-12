<?php
include 'koneksi.php';

$id = $_GET['id'];
$tabel = $_GET['tabel'];

if ($tabel == 'produk') {
    // Hapus data produk berdasarkan ProdukID
    mysqli_query($koneksi, "DELETE FROM produk WHERE ProdukID='$id'");
    header("location:pendataan.php");
} else if ($tabel == 'pelanggan') {
    // Hapus data pelanggan berdasarkan PelangganID
    mysqli_query($koneksi, "DELETE FROM pelanggan WHERE PelangganID='$id'");
    header("location:pelanggan.php");
} else {
    header("location:home.php");
}
?>
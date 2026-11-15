<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit();
}
include 'koneksi.php';

$produkID = $_POST['ProdukID'];
$jumlahBeli = $_POST['JumlahProduk'];
$tanggal = date('Y-m-d');
$queryProduk = mysqli_query($koneksi, "SELECT * FROM produk WHERE ProdukID='$produkID'");
$produk = mysqli_fetch_array($queryProduk);
$harga = $produk['Harga'];
$stokSekarang = $produk['stock'];

if($jumlahBeli > $stokSekarang){
    echo "<script>alert('Stok tidak mencukupi!'); window.location='transaksi.php';</script>";
    exit();
}

$totalHarga = $harga * $jumlahBeli;
mysqli_query($koneksi, "INSERT INTO penjualan (TanggalPenjualan, TotalHarga) VALUES ('$tanggal', '$totalHarga')");
$penjualanID = mysqli_insert_id($koneksi);
mysqli_query($koneksi, "INSERT INTO detailpenjualan (PenjualanID, ProdukID, JumlahProduk, Subtotal) VALUES ('$penjualanID', '$produkID', '$jumlahBeli', '$totalHarga')");
$stokBaru = $stokSekarang - $jumlahBeli;
mysqli_query($koneksi, "UPDATE produk SET stock='$stokBaru' WHERE ProdukID='$produkID'");
echo "<script>alert('Transaksi berhasil!'); window.location='pendataan.php';</script>";
?>
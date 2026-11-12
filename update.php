<?php
include 'koneksi.php';

$id = $_POST['ProdukID'];
$namaproduk = $_POST['NamaProduk'];
$harga = $_POST['Harga'];
$stock = $_POST['Stock'];

mysqli_query($koneksi, "UPDATE produk SET NamaProduk='$namaproduk', Harga='$harga', Stock='$stock' WHERE ProdukID='$id'");

header("location:pendataan.php");
?>
<?php
include 'koneksi.php';



$namaproduk = $_POST['NamaProduk'];
$harga = $_POST['Harga'];
$stock = $_POST['Stock'];


mysqli_query($koneksi, "INSERT INTO produk (NamaProduk, Harga, Stock) VALUES ('$namaproduk', '$harga', '$stock')");

header("location:pendataan.php");
?>
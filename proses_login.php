<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM users WHERE Username='$username' AND Password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
    $row = mysqli_fetch_assoc($data);
    $_SESSION['username'] = $row['Username'];
    $_SESSION['role'] = $row['Role'];
    
    header("location:home.php");
} else {
    header("location:login.php?pesan=gagal");
}
?>
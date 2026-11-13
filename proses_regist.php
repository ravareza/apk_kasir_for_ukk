<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role'] != 'Administrator'){
    header("location:login.php");
    exit();
}

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = mysqli_query($koneksi, "INSERT INTO users (Username, Password, Role) VALUES ('$username', '$password', '$role')");

if($query){
    header("location:home.php");
} else {
    header("location:regist.php?pesan=gagal");
}
?>
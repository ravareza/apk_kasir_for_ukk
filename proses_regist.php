<?php
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

$query=mysqli_query($koneksi,"Insert Into users(Username,Password,Role) Values ('$username','$password','$role')");

if($query){
    header('registrasi berhasil');
}else{
    header('registrasi gagal');
}
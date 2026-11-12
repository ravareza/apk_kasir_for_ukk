<?php

$koneksi = mysqli_connect("localhost", "root", "", "kasir");

//cek koneksi
if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
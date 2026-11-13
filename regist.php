<?php
session_start();
// Mencegah petugas atau user biasa mengakses halaman ini lewat URL langsung
if(!isset($_SESSION['username']) || $_SESSION['role'] != 'Administrator'){
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Akun - Aplikasi Kasir</title>
</head>
<body>
    <h2>Tambah Akun Pengguna Baru</h2>
    <a href="home.php">Kembali ke Beranda</a>
    <br><br>
    
    <?php 
    if(isset($_GET['pesan']) && $_GET['pesan']=="gagal"){
        echo "<div style='color:red;'>Gagal mendaftarkan akun!</div>";
    }
    ?>
    
    <form action="proses_regist.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td>
                    <select name="role" required>
                        <option value="Administrator">Administrator</option>
                        <option value="Petugas">Petugas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan Akun"></td>
            </tr>
        </table>
    </form>
</body>
</html>
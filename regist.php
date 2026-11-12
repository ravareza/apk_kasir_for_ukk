<!DOCTYPE html>
<html>
<head>
    <title>Registrasi - Aplikasi Kasir</title>
</head>
<body>
    <a href="index.php"><-back</a>
    <h2>Registrasi Akun Baru</h2>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "Registrasi gagal, coba lagi!";
        }
    }
    ?>
    <form action="proses_register.php" method="POST">
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
                        <option value=""></option>
                        <option value="Administrator">Administrator</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Register"> 
                    <h2></h2>
                    <a href="login.php">Sudah punya akun? Login</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
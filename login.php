<!DOCTYPE html>
<html>
<head>
    <title>Login - Aplikasi Kasir</title>
</head>
<body>
    <h2>Login Aplikasi Kasir</h2>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div style='color:red;'>Username atau Password salah!</div>";
        }
    }
    ?>
    <form action="proses_login.php" method="POST">
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
                <td></td>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
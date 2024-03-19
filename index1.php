<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['ussername'])) {
    header("Location: berhasil_login.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['ussername'] = $row['ussername'];
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
      <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Login</title>
   
</head>
<body>
    <dif class="container-fluid" style="padding-top:10%;text-align:center">
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Data Karyawan</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group"><br>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group"><br>
                <button name="submit" class="btn">Login</button>
            </div>
         
            
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>

            <marquee><p>copyright &copy; 2022 by Muhammad Luthfi Farizqi</P></marquee>
        </form>
    </div>
</body>
</html>
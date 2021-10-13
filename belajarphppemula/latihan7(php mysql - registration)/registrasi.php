<?php 
    require 'functions.php';

    if(isset($_POST['register'])) {
        if(register($_POST) > 0) {
            echo "<script>alert('Registrasi Berhasil!')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
    <label for="username">Username :</label>
    <input type="text" name="username" id="username"> <br><br>
    <label for="password">Password :</label>
    <input type="password" name="password" id="password" autocomplete="off"> <br><br>
    <label for="password2">Konfirmasi Password :</label>
    <input type="password" name="password2" id="password2" autocomplete="off"> <br><br>
    <button type="submit" name="register">Register</button> <br><br>
    </form>
    <a href="index.php">kembalii</a>
</body>
</html>
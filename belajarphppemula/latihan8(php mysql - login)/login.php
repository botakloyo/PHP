<?php 
    require 'functions.php';

    if(isset($_POST['login'])) {

        $username = $_POST["username"];
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $error = false;

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_num_rows($sql) === 1) {

            $row = mysqli_fetch_assoc($sql);

            if(password_verify($password,$row['password'])) {
                header("location: index.php");
                exit;
            }
        }

        $error = true;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if(isset($error)) :?>
        <p style="color:red;font-style:italic">username / password yang anda masukan salah!</p>
    <?php endif?>
    <form action="" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username"> <br> <br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password"> <br> <br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
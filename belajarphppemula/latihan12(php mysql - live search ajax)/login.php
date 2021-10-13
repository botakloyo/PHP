<?php 
    session_start();
    require 'functions.php';

    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
        $row = mysqli_fetch_assoc($result);

        // echo hash('sha256',$row['id']);
        // echo '<br>';
        // echo $id;

        if($id == $row['id'] && $key == hash('sha256',$row['username'])) {
            $_SESSION['login'] = true;
        }
    }

    if(isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }

    if(isset($_POST['login'])) {

        $username = $_POST["username"];
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $error = false;

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_num_rows($sql) === 1) {

            $row = mysqli_fetch_assoc($sql);

            if(password_verify($password,$row['password'])) {

                if(isset($_POST['remember'])) {
                    setcookie('id',$row["id"],time() + 300);
                    setcookie('key', hash('sha256', $row["username"]) ,time() + 300);
                }


                $_SESSION['login'] = true;
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
        <input type="checkbox" name="remember" id="remember"> 
        <label for="remember">Remember Me</label> <br> <br>
    </form>
</body>
</html>
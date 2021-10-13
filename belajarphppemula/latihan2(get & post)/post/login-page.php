<?php 
    $error = false;
    if(isset($_POST["submit"])) {
        print('tes');
        if($_POST["username"] == "admin" && $_POST["password"] == "123")
        {
            header("Location:admin-page.php");
        }
        else {
            $error = true;
        }
    }
    
    var_dump($_POST);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login Page</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if($error) :?><h4 style="color:red">Username / Password Salah!</h4><?php endif?>
    
    <form action="" method="POST">
        <label for="username">Username : </label>
        <input type="text" id="username" name="username"> <br><br>
        <label for="pass">Password : </label>
        <input type="password" name="password" id="pass"> <br><br>
        <button type="submit" name="submit">Submit</button> 
    </form>
</body>
</html>
<?php 
    require 'functions.php';

    if(isset($_POST['submit'])){
        $data = $_POST;
        // echo "Nama : " . $data['name'] .'<br>';
        // echo "Jenis Kelamin : " . $data['gender'].'<br>';
        // echo "Kelas : " . $data['kelas'].'<br>';
        $tambah = TambahData($data);
        if($tambah > 0) {
            echo 'Berhasil!';
        }
        else print_r(mysqli_error($con));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<style>
    body {
        margin:auto;
        font-family: Arial, Helvetica, sans-serif;
    }

    h2 {
        text-align: center;
    }

    .back {
        margin-bottom : -200px;
    }   

    .container {
        margin:auto;
        width: 80%;
        background-color:azure;
    }

    #name {
        width:80%;
        padding:5px 5px;
    }

</style>

<body>
    <div class="container">
        <h2>Tambah Data Caberawit</h2>
        <form action="" method="post">
            <label for="name">Nama : </label>
            <input type="text" name="name" id="name" autocomplete="off" required="required" placeholder="Masukan nama siswa baru ...">
            <br><br>
            <span>Pilih Jenis Kelamin :</span>
            <input type="radio" checked="true" value='pria' name="gender" id="pria"> <label for="pria">Laki-laki</label>
            <input type="radio" value='wanita' name="gender" id="wanita"> <label for="wanita">Perempuan</label>
            <br><br>
            <label for="kelas">Pilih Kelas : </label>
            <select name="kelas" id="kelas">
                <option value="paud">Paud</option>
                <option value="caberawit kecil">Caberawit Kecil</option>
                <option value="caberawit besar">Caberawit Besar</option>
            </select>
            <br><br>
            <button type="submit" name='submit'>Submit</button>
            <br><br>
        </form>

        <a class="back" href="index.php">Kembali</a>
    </div>
</body>
</html>
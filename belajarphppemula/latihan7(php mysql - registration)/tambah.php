<?php 
    require 'functions.php';

    if(isset($_POST['submit'])) {
        $tambah = tambah($_POST);

        if($tambah > 0) {
            echo '<script>
            alert("Data Berhasil ditambahkan");
            window.location.href = "index.php";
            </script>';
        }
        else {
            echo '<script>alert("Data gagal ditambahkan")</script>';
            var_dump(mysqli_error($conn));
        }
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
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="judul" >Judul Buku : </label>
        <input type="text" name="judul" id="judul" required> <br><br>
        <label for="pengarang">Pengarang : </label>
        <input type="text" name="pengarang" id="pengarang"> <br><br>
        <label for="genre">Genre : </label>
        <input type="text" name="genre" id="genre"> <br><br>
        <label for="tahun">Tahun Terbit : </label>
        <input type="text" name="tahun" id="tahun"> <br><br>
        <label for="cover">Gambar Cover (Max. 1MB) : </label>
        <input type="file" name="cover" id="cover"><br><br>
        <button type="submit" name="submit">Tambahkan Data</button> <br><br>
    </form>

    <a href="index.php">kembali</a>
</body>
</html>
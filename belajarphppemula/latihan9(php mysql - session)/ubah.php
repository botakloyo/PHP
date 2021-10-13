<?php 
    require 'functions.php';
    $id = $_GET['id'];
    $data = query("SELECT * FROM buku WHERE id='$id'")[0];

    // var_dump($data);

    if(isset($_POST['submit'])) {
        $ubah = ubah($_POST);

        if($ubah > 0) {
            echo '<script>
            alert("Data Berhasil diubah");
            window.location.href = "index.php";
            </script>';
        }
        else {
            echo '<script>alert("Data gagal diubah")</script>';
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
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Data</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name ="id" value="<?= $data['id']?>">
        <input type="hidden" name ="coverLama" value="<?= $data['cover']?>">
        <label for="judul" >Judul Buku : </label>
        <input type="text" name="judul" id="judul" required value="<?= $data['judul']?>"> <br><br>
        <label for="pengarang">Pengarang : </label>
        <input type="text" name="pengarang" id="pengarang" value="<?= $data['pengarang']?>"> <br><br>
        <label for="genre">Genre : </label>
        <input type="text" name="genre" id="genre" value="<?= $data['genre']?>"> <br><br>
        <label for="tahun">Tahun Terbit : </label>
        <input type="text" name="tahun" id="tahun" value="<?= $data['rilis']?>"> <br><br>
        <label for="cover">Cover Buku : </label>
        <input type="file" name="cover" id="cover"> <br><br>
        <img src="buku/<?= $data['cover']?>" width="100px"> <br><br>
        <button type="submit" name="submit">Ubah Data</button> <br><br>
    </form>

    <a href="index.php">kembali</a>
</body>
</html>
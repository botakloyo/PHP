<?php 
    require "functions.php";

    $id = $_GET['id'];
    $murid = Query("SELECT * FROM murid WHERE id='$id'")[0];
    $nama = $murid['name'];
    $gender = $murid['gender'];
    $kelas = $murid['class'];

    if(isset($_POST['submit'])){
        $edit = EditData($_POST);
        if($edit > 0) {
            echo $edit;
            echo "<script>
            alert('Data Berhasil di Ubah!');
            window.location.href = 'index.php';
            </script>";
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
    <title>Edit Data</title>
</head>
<style>
    body {
        margin:auto;
        font-family: Arial, Helvetica, sans-serif;
    }

    h2 {
        text-align: center;
        margin-top: 0;
    }

    .back {
        margin-bottom : -200px;
    }   

    .container {
        margin:30px auto;
        width: 80%;
        background-color:greenyellow;
        padding: 30px;
    }

    #name {
        width:80%;
        padding:5px 5px;
    }

</style>

<body>
    <div class="container">
        <h2>Edit Data Caberawit</h2>
        <form action="" method="post">
            <input type="hidden" name='id' value="<?= $id ?>">
            <label for="name">Nama : </label>
            <input type="text" name="name" value="<?= $nama ?>" id="name" autocomplete="off" required="required" placeholder="Masukan nama siswa baru ...">
            <br><br>
            <span>Pilih Jenis Kelamin :</span>
            <input type="radio" <?php if($gender == 'Pria') echo "checked='true'"?> value='pria' name="gender" id="pria"> <label for="pria">Laki-laki</label>
            <input type="radio" <?php if($gender == 'Wanita') echo "checked='true'"?> value='wanita' name="gender" id="wanita"> <label for="wanita">Perempuan</label>
            <br><br>
            <label for="kelas">Pilih Kelas : </label>
            <select name="kelas" id="kelas">
                <option <?php if($kelas == 'Paud') echo "selected='selected'"?> value="paud">Paud</option>
                <option <?php if($kelas == 'Caberawit Kecil') echo "selected='selected'"?> value="caberawit kecil">Caberawit Kecil</option>
                <option <?php if($kelas == 'Caberawit Besar') echo "selected='selected'"?> value="caberawit besar">Caberawit Besar</option>
            </select>
            <br><br>
            <button type="submit" name='submit' id='submit'>Submit</button>
            <br><br>
        </form>

        <a class="back" href="index.php">Kembali</a>
    </div>
</body>
</html>
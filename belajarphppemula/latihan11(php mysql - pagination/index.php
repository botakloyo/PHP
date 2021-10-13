<?php 
    session_start();

    if(!isset($_SESSION["login"])){
        echo 'tes';
        header("Location: login.php");
        exit;
    }

    require 'functions.php';

    // pagination ////////////////////////////////

    $jumlahData =  count(query("SELECT * FROM buku"));
    $tampilDataPerHalaman = 3;
    $jumlahHalaman = ceil($jumlahData / $tampilDataPerHalaman);

    if(!isset($_GET['halaman'])){
        $_GET['halaman'] = 1;
    }

    $dataAwalHalaman = ($_GET['halaman'] - 1) * $tampilDataPerHalaman;
    echo $dataAwalHalaman;

    $buku = query("SELECT * FROM buku LIMIT $dataAwalHalaman, $tampilDataPerHalaman");
    $no = 1;

    if(isset($_POST['cari'])){
        $buku = query(cari($_POST['pencarian']));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP MYSQL</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Simple Table Data From MYSQL</h1>

    <form action="" method="POST">
    <input type="text" size="30" autocomplete="off" placeholder="Silahkan cari..." name="pencarian">
    <button type="submit" name="cari">Cari</button>
    </form> <br>

    <a href="tambah.php">Tambah data buku</a>
    <br><br>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
        <a href="?halaman=<?=$i ?>"><?= $i?></a>
    <?php endfor?>
    <table border="1" cellpadding='10' cellspacing='4'>
        <tr>
            <th>No</th>
            <th>Cover Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Genre</th>
            <th>Tahun</th>
            <th>aksi</th>
        </tr>
        
        <?php foreach($buku as $b):?>
        <tr>
            <td><?= $no + $dataAwalHalaman ?></td>
            <td><img src="buku/<?= $b['cover']?>" alt="why" width="100px" height="140px"></td>
            <td><?= $b['judul']?></td>
            <td><?= $b['pengarang']?></td>
            <td><?= $b['genre']?></td>
            <td><?= $b['rilis']?></td>
            <td>
                <a href="ubah.php?id=<?= $b['id']?>"">ubah</a> | <a href="hapus.php?id=<?= $b['id']?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">delete</a>
            </td>
        </tr>

        <?php $no++; endforeach?>

    </table>
</body>
</html>
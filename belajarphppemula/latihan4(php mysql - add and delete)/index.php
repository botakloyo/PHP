<?php 
    require 'functions.php';
    $buku = query('SELECT * FROM buku');
    $no = 1;
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
    <h1>Simple Table Data From MYSQL</h1>
    <a href="tambah.php">Tambah data buku</a>
    <br><br>
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
            <td><?= $no ?></td>
            <td><img src="buku/<?= $b['cover']?>" alt="why" width="100px" height="140px"></td>
            <td><?= $b['judul']?></td>
            <td><?= $b['pengarang']?></td>
            <td><?= $b['genre']?></td>
            <td><?= $b['rilis']?></td>
            <td>
                <a href="">tambah</a> | <a href="hapus.php?id=<?= $b['id']?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">delete</a>
            </td>
        </tr>

        <?php $no++; endforeach?>

    </table>
</body>
</html>
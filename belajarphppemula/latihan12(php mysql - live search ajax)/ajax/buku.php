<?php 
    require '../functions.php';

    $keyword = $_GET['keyword'];

    $query =  "SELECT * FROM buku WHERE 
                judul LIKE '%$keyword%' OR
                pengarang LIKE '%$keyword%' OR
                genre LIKE '%$keyword%' OR
                rilis LIKE '%$keyword%'";
    $buku = query($query);
    $no = 1;
?>

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
                <a href="ubah.php?id=<?= $b['id']?>"">ubah</a> | <a href="hapus.php?id=<?= $b['id']?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">delete</a>
            </td>
        </tr>

        <?php $no++; endforeach?>

    </table>
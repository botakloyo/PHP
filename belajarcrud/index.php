<?php 
    require 'functions.php';
    $no = 1;
    $murid = Query('SELECT * FROM murid');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Caberawit Campurejo</h2>
    <div class="container">
        <div class="row">
            <div class="column top">
                <div class="sm content">NO</div>
                <div class="lg content">NAMA</div>
                <div class="md content">JENIS KELAMIN</div>
                <div class="md content">KELAS</div>
                <div class="md content">AKSI</div>
            </div>
        </div>

        <div class="row">
            <?php foreach($murid as $m): ?>
            <div class="column">
                <div class="sm content"><?= $no ?></div>
                <div class="lg content"><?= $m['name'] ?></div>
                <div class="md content"><?= $m['gender'] ?></div>
                <div class="md content"><?= $m['class'] ?></div>
                <div class="md content"><a  href="delete.php?id=<?= $m['id']?>" class="delete" >delete</a> | <a href="edit.php?id=<?= $m['id']?>">edit</a></div>
            </div>
            <?php $no ++ ; endforeach ?>
        </div>

        <a href="tambah.php">Tambah Data</a>
    </div>

</body>

<script>

document.addEventListener('click', (e) => {
    if(e.target.classList.contains('delete')) {
        const confirms = confirm('Apakah kamu yakin mau menghapus data ini?') ? true : e.preventDefault();
    }
})

</script>
</html>
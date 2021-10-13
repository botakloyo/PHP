<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    h2 {margin:0;}

    .cards {
        width: auto;
        height: auto;
        margin-bottom: 10px;
    }

    .cards img {
        width: 140px;
        height: 200px;
        float: left;
    }

    .cards::after {
        content: '';
        display: block;
        clear: both;
    }

    .book-detail {
        /* width: 400px; */
        margin-left: 10px;
        float: left;
        /* background-color: salmon; */
    }
</style>

<body>
    <div class="cards">
        <img src="buku/<?= $_GET["cover"] ?>" alt="">
        <div class="book-detail">
            <h2><?php echo $_GET['judul']?></h2>
            <p>Penulis : <?php echo $_GET['penulis']?></p>
            <p>Tahun Terbit : <?php echo $_GET['rilis']?></p>
            <p>Genre : <?php echo $_GET['genre']?></p>
        </div>
    </div>

    <a href="index.php">kembali</a>
</body>
</html>
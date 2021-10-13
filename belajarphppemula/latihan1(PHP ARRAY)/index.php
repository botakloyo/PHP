<?php 
    $books = [
        [
            "judul" => "Hujan",
            "penulis" => "Tere Liye",
            "rilis" => "2018",
            "genre" => "Romance",
            "cover" => "hujan.jpg"
        ],
        [
            "judul" => "5cm",
            "penulis" => "Donny Dhirgantoro",
            "rilis" => "2005",
            "genre" => "Fiksi",
            "cover" => "5cm.jpg"
        ],
        [
            "judul" => "Malam Terakhir",
            "penulis" => "Leila Salikha Chudori",
            "rilis" => "1989",
            "genre" => "Fiksi",
            "cover" => "malam-terakhir.jpg"
        ],
        [
            "judul" => "Tenung",
            "penulis" => "Risa Saraswati",
            "rilis" => "2019",
            "genre" => "Horor",
            "cover" => "tenung.jpg"
        ],
        [
            "judul" => "Sewu Dino",
            "penulis" => "Simpleman",
            "rilis" => "2019",
            "genre" => "Horor",
            "cover" => "sewu-dino.jpg"
        ],
    ];

    $arr = [0,1,4,1,5,7];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP : Simple Data Array</title>
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

<div class="container">
    <?php foreach($books as $book) : ?>
        <div class="cards">
            <img src="buku/<?= $book["cover"] ?>" alt="">
            <div class="book-detail">
                <h2><?php echo $book['judul']?></h2>
                <p>Penulis : <?php echo $book['penulis']?></p>
                <p>Tahun Terbit : <?php echo $book['rilis']?></p>
                <p>Genre : <?php echo $book['genre']?></p>
            </div>
        </div>
    <?php endforeach ?>
</div>
    
</body>
</html>
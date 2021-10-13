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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Books List</title>
</head>

<body>
    <h1>Judul Buku</h1>
    <ul>
        <?php foreach($books as $book) : ?>
            <li><a href="detail.php?judul=<?= $book["judul"]?>&penulis=<?= $book["penulis"]?>&rilis=<?= $book["rilis"]?>&genre=<?= $book["genre"]?>&cover=<?= $book["cover"]?>"><?= $book["judul"]?></a></li>
        <?php endforeach?>
    </ul>
</body>
</html>
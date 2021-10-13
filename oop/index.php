<?php

require_once "App/init.php";

$produk1 = new Komik("One Piece","Eiichiro Oda","Toei Animation",25000,100);
$produk2 = new Game("Shinobido","Tanaka Warui","Capcom",75000,5);
echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
echo "<hr>";
$produk1->diskonGame(10);
echo $produk1->getHarga();
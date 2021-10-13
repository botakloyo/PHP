<?php 

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0,$waktuMain=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo() {
        $str = "Game : ". parent::getInfoDetail() ." ~ {$this->waktuMain} Jam";
        return $str;
    }
}
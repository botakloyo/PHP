<?php 

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0,$jmlHalaman=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = "Komik : ". parent::getInfoDetail() ." - {$this->jmlHalaman} Halaman";
        return $str;
    }
}
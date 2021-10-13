<?php 

abstract class Produk {

    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon;

    public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    abstract function getInfo();

    public function getInfoDetail() {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $str;
    }

    public function diskonGame($diskon) {
        $this->harga = $this->harga - ($this->harga * $diskon / 100);
    }

    public function setHarga($harga){
        $this->harga  = $harga;
    }

    public function getHarga(){
        return $this->harga;
    }

}
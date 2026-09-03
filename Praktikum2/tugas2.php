<?php

class Product{
    public $nama;
    public $harga;
    public $kategori;

    public function __construct($nama, $harga, $kategori){
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }
    public function getInfo(){
        return "Produk $this->nama memiliki harga $this->harga dan termasuk kategori $this->kategori";
    }
    public function applyDiskon($persen){
        $diskon = $this -> harga * $persen / 100;
        $akhir = $this -> harga - $diskon;
        $this->harga = $akhir;
        return "Produk $this->nama mendapatkan diskon $persen%, harga akhir Rp.$this->harga";
    }
}
$produk1 = new Product("Tumbler", 100000, "Alat Makan/Minum");
$produk2 = new Product("Tas", 250000, "Perlengkapan Sekolah");

echo $produk1 -> getInfo(). "<br>";
echo $produk2 -> getInfo(). "<br>";

echo $produk1 -> applyDiskon(20). "<br>";
echo $produk2 -> applyDiskon(50);

?>
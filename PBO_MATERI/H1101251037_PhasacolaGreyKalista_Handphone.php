<?php

class Handphone{
    private $nama;
    private $harga;
    private $stok;
    private $kapasitas;

    //getter//
    public function getNama(){
        return $this->nama;
    }

    public function getHarga(){
        return $this->harga;
    }

    public function getStok(){
        return $this->stok;
    }

    public function getKapasitas(){
        return $this->kapasitas;
    }

    //setter//
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setHarga($harga){
        if ($harga > 0 ){
            $this->harga = $harga;
        }
        else {
            echo ("<br>"."Harga tidak boleh 0 atau Minus"."<br>");
        }

    }

    public function setStok($stok){
        if ($stok > 0){
            $this->stok = $stok;
        }
        else {
            echo ("Stok kosong"."<br>"."<br>");
        }

    }

    public function setKapasitas($kapasitas){
        $this->kapasitas = $kapasitas;
    }

}

$hp1 = new Handphone();
$hp2 = new Handphone();

$hp1->setNama("Samsung S25");
$hp1->setHarga(25000000);
$hp1->setStok(25);
$hp1->setKapasitas(256);

echo "Nama Handphone   : ".$hp1->getNama(). "<br>";
echo "Harga Handphone  : ".$hp1->getHarga()."<br>";
echo "Stok Tersedia    : ".$hp1->getStok()."<br>";
echo "Kapasitas Memory : ".$hp1->getKapasitas()." GB"."<br>";

$hp2->setNama("Iphone 17");
$hp2->setHarga(-2100000);
$hp2->setStok(0);
$hp2->setKapasitas(500);

echo "Nama Handphone   : ".$hp2->getNama(). "<br>";
echo "Harga Handphone  : ".$hp2->getHarga()."<br>";
echo "Stok Tersedia    : ".$hp2->getStok()."<br>";
echo "Kapasitas Memory : ".$hp2->getKapasitas()." GB"."<br>";


?>
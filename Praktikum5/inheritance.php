<?php

class Produk {
    protected $nama;
    protected $merek;
    protected $harga;

    public function __construct($nama, $merek, $harga){
        $this->nama = $nama;
        $this -> merek = $merek;
        if ($harga > 0) {
            $this->harga = $harga;
        } elseif ($harga <= 0) {
            echo "Harga tidak valid";
        }
    }

    public function getInfo(){
        return "Nama : $this->nama <br> Merek : $this->merek <br> Harga : Rp. " . number_format($this->harga, 0, ',','.');
    }
}

class Makanan extends Produk{
    private $kadaluarsa ;
    private $status;

    public function __construct($nama, $merek, $harga, $kadaluarsa){
        parent::__construct($nama, $merek, $harga);
        if ($kadaluarsa >= date("Y-m-d")){
            $this->kadaluarsa = $kadaluarsa;
            $this->status = "Segar";
        } else {
            $this->kadaluarsa = $kadaluarsa;
            $this->status = "Kadaluarsa";
        }
    }

    public function getInfo(){
        return parent::getInfo() . "<br>kadaluarsa : $this->kadaluarsa <br>Status : $this->status";
    }


}

class Elektronik extends Produk {
    private $garansi;

    public function __construct($nama, $merek, $harga, $garansi){
        parent::__construct($nama, $merek, $harga);
        $this->garansi = $garansi;
    }

    public function getInfo(){
        return parent::getInfo(). "<br>Garansi : $this->garansi";
    }
}

$beras = new Makanan("Cemilan", "Kentang Goreng",  10000, "2027-12-30");
$tv = new Elektronik("TV", "Samsung", 5000000, "2 Tahun");

echo $beras->getInfo();
echo "<br><br>";
echo $tv->getInfo();
echo "<br><br>";


?>
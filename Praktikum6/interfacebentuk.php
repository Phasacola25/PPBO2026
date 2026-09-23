<?php

interface Bentuk {
    public function hitungLuas();
}

class Persegi implements Bentuk {
    private $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    
    public function hitungLuas(){
        return $this ->sisi * $this->sisi;
    }
    
    public function getInfo(){
        return "Sisi = $this->sisi";
    }
}

class Lingkaran implements Bentuk {
    private $jari;

    public function __construct($jari){
        $this->jari = $jari;
    }

    public function hitungLuas(){
        return 3.14 * $this ->jari * $this->jari;
    }

    public function getInfo(){
        return  "jari-jari = $this->jari";
    }

}
$persegi = new Persegi(5);
$lingkaran = new Lingkaran(7);

$bentuk = [$persegi, $lingkaran];

foreach ($bentuk as $item) {
    echo "Luas (" . $item->getInfo() . ") = ". $item->hitungLuas() . " cm²<br>";
}
?>
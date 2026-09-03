<?php

class Mobil {
    public $merek;
    public $warna;
    public $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }
    public function getInfo() {
        return "Merek : $this->merek, Warna : $this->warna, Kecepatan : $this->kecepatan ";
    }
    public function jalankan() {
        return "Mobil $this->merek berjalan dengan kecepatan $this->kecepatan km/jam";
    }
    public function berhenti() {
        return "Mobil $this->merek berhenti";
    }
}
$mobil1 = new Mobil("Mazda", "Merah", 100 );
$mobil2 = new Mobil("Carera", "Putih", 150 );
$mobil3 = new Mobil("SF26", "Rosso Corsa", 300);

echo $mobil1->getInfo()."<br>";
echo $mobil2->jalankan()."<br>";
echo $mobil3->berhenti()."<br>";
?>
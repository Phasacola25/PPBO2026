<?php

class Mobil {
    private $merek;
    private $warna;
    private $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }
    //getter//
    public function getMerek() {
        return $this->merek;
    }
    public function getWarna() {
        return $this->warna;
    }
    public function getKecepatan() {
        return $this->kecepatan;
    }


    //setter//
    public function setKecepatan($kecepatan) {
        if ($kecepatan >=0 && $kecepatan <= 200) {
            $this -> kecepatan = $kecepatan;
        } else {
            echo "Melebihi Limit";
        }
    }
    public function setWarna($warna) {
        if ($warna != "" && strlen($warna) >= 3 ){
            $this->warna = $warna;
        } else {
            echo "Warna tidak valid";
        }
    }

    //Method//
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

echo "<br>";
echo "Merek: " . $mobil1->getMerek() . "<br>";
echo "Warna: " . $mobil1->getWarna() . "<br>";
echo "Kecepatan: " . $mobil1->getKecepatan() . " km/jam<br>";


// Pengujian setter kecepatan
echo "<br>";
echo "Pengujian Kecepatan:<br>";

$mobil1->setKecepatan(180);
echo "Kecepatan setelah diubah: " . $mobil1->getKecepatan() . " km/jam<br>";

$mobil1->setKecepatan(250);


// Pengujian setter warna
echo "<br>";
echo "Pengujian Warna:<br>";

$mobil1->setWarna("Biru");
echo "Warna setelah diubah: " . $mobil1->getWarna() . "<br>";

$mobil1->setWarna("AB");

?>
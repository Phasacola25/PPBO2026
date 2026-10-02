<?php

abstract class TiketTravel{
    protected $id;
    protected $nama;
    protected $hargaDasar;

    public function __construct($id, $nama, $hargaDasar){
    $this->id = $id;
    $this->nama = $nama;
    $this->hargaDasar = $hargaDasar;
    }

    public function getId(){
        return $this->id;
    }
    public function getNama(){
        return $this->nama;
    }
    public function gethargaDasar(){
        return $this->hargaDasar;
    }
    abstract public function hitungTotal();
    abstract public function getJenis();
}

class Ekonomi extends TiketTravel{
    private $kursi;

    public function __construct($id, $nama, $hargaDasar, $kursi){
        parent::__construct($id, $nama, $hargaDasar);
        $this->kursi = $kursi;}
    public function getJenis(){
        return "Ekonomi" ;}
    public function hitungTotal(){
        return $this-> hargaDasar * $this-> kursi ;}
}

class Bisnis extends TiketTravel{
    private $kursi;

    public function __construct($id, $nama, $hargaDasar, $kursi){
        parent::__construct($id, $nama, $hargaDasar);
        $this->kursi = $kursi;}
    public function getJenis(){
        return "Bisnis";}
    public function hitungTotal(){
        return $this-> hargaDasar * $this->kursi;
        if ($this->kursi > 2) {
            $total = $total - ($total * 0.10);}
        return $total;}
}
  

class Eksekutif extends TiketTravel{
    private $kursi;

    public function __construct($id, $nama, $hargaDasar, $kursi){
        parent::__construct($id, $nama, $hargaDasar);
        $this->kursi = $kursi;}
    public function getJenis(){
        return "Eksekutif ";}
    public function hitungTotal(){
        return $this->hargaDasar * $this->kursi;}
}

$tiket1 = new Ekonomi("T01", "Phasa", 100000, 2);
$tiket2 = new Bisnis("T02", "Cola", 150000, 3);
$tiket3 = new Eksekutif("T03", "Grey", 200000, 1);
$tiket4 = new Ekonomi("T04", "Kal", 100000, 1);
$tiket5 = new Bisnis("T05", "Lista", 150000, 2);

echo "ID : ".$tiket1->getId()." | ". $tiket1->getNama()." | Jenis ". $tiket1->getJenis() . "| Total: Rp ".$tiket1->hitungTotal()."<br>";
echo "ID : ".$tiket2->getId()." | ". $tiket2->getNama()." | Jenis ". $tiket2->getJenis() . "| Total: Rp ".$tiket2->hitungTotal()."<br>";
echo "ID : ".$tiket3->getId()." | ". $tiket3->getNama()." | Jenis ". $tiket3->getJenis() . "| Total: Rp ".$tiket3->hitungTotal()."<br>";
echo "ID : ".$tiket4->getId()." | ". $tiket4->getNama()." | Jenis ". $tiket4->getJenis() . "| Total: Rp ".$tiket4->hitungTotal()."<br>";
echo "ID : ".$tiket5->getId()." | ". $tiket5->getNama()." | Jenis ". $tiket5->getJenis() . "| Total: Rp ".$tiket5->hitungTotal()."<br>";

?>
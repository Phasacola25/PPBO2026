<?php
class persegipanjang
{
    public $panjang;
    public $lebar;

    public function hitungluas()
    {
        return $this->panjang * $this->lebar;
    }
}

$persegipanjang = new persegipanjang() ;

$persegipanjang->panjang = 10;
$persegipanjang->lebar = 5;

echo "Panjang : ". $persegipanjang->panjang."<br>";
echo "lebar : ".$persegipanjang->lebar."<br>";
echo "Luas Persegi Panjang :"  . $persegipanjang->hitungluas();
?>
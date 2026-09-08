<?php

function hitungluas($panjang, $lebar)
{
    return $panjang * $lebar;
}

$panjang = 10;
$lebar = 5;

$luas = hitungluas($panjang, $lebar);

echo "Panjang : ".$panjang."<br>";
echo "Lebar : ".$lebar."<br>";
echo "Luas Persegi Panjang : ".$luas;
?>
<?php

function hitungnilaiakhir($uts, $uas, $tugas)
{
    $nilaiakhir = ($uts*0.30) + ($uas*0.40) + ($tugas * 0.30);
    return $nilaiakhir;
}

$uts = 80;
$uas = 90;
$tugas = 85;

$hasil = hitungnilaiakhir($uts,$uas,$tugas);

echo "Nilai UTS : ". $uts."<br>";
echo "Nilai UAS : ". $uas."<br>";
echo "Nilai Tugas : ". $tugas."<br>";
echo "Nilai Akhir : " .$hasil;

?>
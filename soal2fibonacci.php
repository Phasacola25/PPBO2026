<?php

$angka1 = 0;
$angka2 = 1;

echo "Deret Fibonacci 10 suku :";

for ($i = 1;$i <= 10; $i++)
{
    echo $angka1 . " ";

    $angkaberikutnya = $angka1 + $angka2;
    $angka1 = $angka2;
    $angka2 = $angkaberikutnya;

}

?>

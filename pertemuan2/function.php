<?php
function penjumlahan($nilai1, $nilai2)
{
    echo "<br>";
    $hasil = $nilai1 + $nilai2;
    return $hasil;
}

function perkalian($nilai1, $nilai2)
{
    return $nilai1 * $nilai2;
}

$penjumlahan1 = penjumlahan(5, 2);
$penjumlahan2 = penjumlahan(2, 3);


// mengkalikan hasil pertama dan kedua
echo perkalian($penjumlahan1, $penjumlahan2);
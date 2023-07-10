<?php
function pengurangan($nilai1, $nilai2)
{
    echo "<br>";
    $hasil = $nilai1 - $nilai2;
    return $hasil;
}

function pembagian($nilai1, $nilai2)
{
    return $nilai1 / $nilai2;
}

$pengurangan1 = pengurangan(50, 30);
$pengurangan2 = pengurangan(8, 3);


// membagi hasil pertama dan kedua
echo pembagian($pengurangan1, $pengurangan2);
<?php

// tipe data integer
$umur = 20;

var_dump($umur);


// Float
$phi = 3.14;

var_dump($phi);


// String
$nama = "Dicko";

var_dump($nama);


echo "<br>";
echo "Hello $nama, umur $umur, nilai 'phi' adalah $phi";


// boolean
$isStudent = true;

echo "<br>";
var_dump($isStudent);


// array
$siswa = ["Dicko", 17, true];

echo "<br>";
var_dump($siswa);

// array: indexing
echo "<br>";
echo "Halo nama saya $siswa[0], umur saya $siswa[1]";
echo "<br>";

// array: asosiatif
$mahasiswa = ["nama" => "Dicko Andrian", "umur" => 17, "ipk" => 4.0];

echo "Hai nama saya $mahasiswa[nama], saya umur $mahasiswa[umur], nilai ipk $mahasiswa[ipk]";

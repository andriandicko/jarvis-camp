<?php

class Kendaraan {
    // Properti
    public $merk;
    public $tahun;

    // Konstruktor
    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    // Method
    public function getInfo() {
        return "Merk: {$this->merk}, Tahun: {$this->tahun}";
    }
}

class Mobil extends Kendaraan {
    // Properti baru untuk class Mobil
    public $jenis;
    public $warna;
    
    // Konstruktor class Mobil
    public function __construct($merk, $tahun, $jenis, $warna) {
        parent::__construct($merk, $tahun, $jenis, $warna);
        $this->jenis = $jenis;
        $this->warna = $warna;
    }

    // Method untuk class Mobil
    public function getJenis() {
        return "Jenis: {$this->jenis}, Warna: {$this->warna}";
    }
}

// Membuat objek berdasarkan class Mobil
$mobil1 = new Mobil("Ferrari", 2012, "California", "Putih");

// Mengakses method dari class Mobil
echo $mobil1->getInfo(); // Output: Merk: Ferrari, Tahun: 2012
echo "<br>";
echo "<br>";
echo $mobil1->getJenis(); // Output: Jenis: California, Warna: Putih

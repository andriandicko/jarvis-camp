<?php
class Mobil {
    //Deklarasi Properti
    public $merk;
    private $warna;
    public $kecepatan;

    //Function setter untuk mengubah merk
    public function setMerk($merk){
        $this->merk = "$merk";
    }

    //function getter untuk menampilkan merk
    public function getMerk(){
        echo $this->merk;
    }

    //Function setter untuk mengubah warna
    public function setWarna($warna){
        $this->warna = "$warna";
    }

    //Function getter untuk mengubah warna
    public function getWarna($warna){
        echo $this->warna;
    }

    //
    public function hidupkanMesin(){
        echo 'Mesin mobil dihidupkan';
    }

    public function jalan(){
        echo "mobil berjalan";
    }
    }


$toyota = new Mobil();
$toyota->setMerk("toyota");
$toyota->setWarna("hitam");
$toyota->getMerk();
$toyota->kecepatan = "50km/jam";
echo "<br>";
$toyota->hidupkanMesin();
echo "<br>";
$toyota->jalan();
echo "<br>";
echo $toyota->kecepatan;
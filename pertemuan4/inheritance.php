<?php
class Hero {
    public $nama;
    public $attack;
    public $hp;

    public function __construct($nama, $attack, $hp)
    {
        $this->nama = $nama;
        $this->attack = $attack;
        $this->hp = $hp;
    }

    public function skill(){
        echo "$this->nama menggunakan skill";
    }
}

class Mage extends Hero {
    public $mana;
    public $magic;

    public function __construct($nama, $attack, $hp, $mana, $magic)
    {
        parent::__construct($nama, $attack, $hp);
        $this->mana = $mana;
        $this->magic = $magic;
    }
    public function skill(){
        echo "$this->nama menggunakan skill";
    }
}

$kagura = new Mage("kagura", 0, 3200, 1000, 400);
echo $kagura->mana;
echo "<br>";
$kagura->skill();
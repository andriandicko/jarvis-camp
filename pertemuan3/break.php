<?php

$hewan = ["kucing", "anjing", "kambing", "ayam", "jerapah"];

for($i = 0; $i <= count($hewan); $i++){
    if($hewan[$i] == "jerapah"){
        echo 'ketemu! jerapah';
        break;
    }
    echo "bukan jerapah <br/>";
}
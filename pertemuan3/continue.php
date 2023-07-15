<?php

$hewan = ["kucing", "anjing", "kambing", "ayam", "jerapah", "gajah", "domba", "singa"];

for($i = 0; $i <= count($hewan); $i++){
    if($hewan[$i] == "jerapah" || $hewan[$i] == "gajah"){
        echo 'ketemu! jerapah <br>';
        continue;
    }
    echo "bukan jerapah <br/>";
}
<?php

for($i = 1; $i <= 10; $i++){
    echo '<br/>Angka ' . $i;
}

$mood = ['stress', 'sedikit stress', 'udah enggak terlalu stress', 'udah mlai senyum', 'senyum', 'full senyum', 'full senyum'];

for($i = 0; $i < count($mood); $i++){
    echo '<br/>hari ini saya ' . $mood[$i];
}
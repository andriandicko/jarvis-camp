<?php

$hari = 'sabtu';
$mood;
switch($hari){
    case 'Senin';
        $mood = 'Senin | stress';
        break;
    case 'Selasa';
        $mood = 'sedikit stress';
        break;
    case 'Rabu':
        $mood = 'udah enggak terlalu stress';
        break;
    case 'Kamis':
        $mood = 'udah mulai senyum';
        break;
    case 'Jum`at':
        $mood = 'senyum';
        break;
    case 'Sabtu':
    case 'Minggu':
        $mood = 'full senyum';
        break;
    default:
        $mood = 'biasa aja';
        break;
}

echo "hari ini saya " . $mood;
<?php

$hari = 'sabtu';
$mood = ($hari == 'sabtu' || $hari == 'minggu')? 'full senyum': 'enggak full senyum';

echo 'hari ini saya ' . $mood;
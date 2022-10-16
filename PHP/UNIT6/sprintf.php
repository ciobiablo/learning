<?php
$yer = 'Afrikada';
$sayi = 5;
$tur = 'maymun';

//echo $yer . ' ' . $sayi . 'tane'. $tur . ' var';
printf('%s %d tane %s var' . PHP_EOL, 'Afrikada', 5, 'maymun');

$tarih = '2022-7-8';
vprintf('%d-%02d-%02d', explode('-', $tarih));
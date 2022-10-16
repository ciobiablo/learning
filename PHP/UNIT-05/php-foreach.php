<?php
$sayılar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($sayılar as $sayı) {
    echo $sayı . '<br>';
}
$uyeDetay = [
    'ad' => 'ahmethan',
    'soyad' => 'uçmaz',
    'yaş' => '26'
];
foreach ($uyeDetay as $key => $value) {
    echo $key . ':' . $value . '<br>';
}
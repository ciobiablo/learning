<?php

/*
for (DEĞER; KOŞUL; DEREİ ARTIR/AZALT){
    }
*/
/*
for ($i= 1; $i<= 10; $i++){
    echo$i. '<br>';
}

for ($i = 10; $i >0; $i--){
    echo $i . '<br>';
} */
$arr = [
    'udemy',
    'protorurk',
    '93academy',
    'ahmethan'
];

for ($i = (count($arr) - 1); $i >= 0; $i--) {
    echo $arr[$i] . '<br>';
}

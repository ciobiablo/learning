<?php
//$test = function(){
//  return 'test';
//};

//echo $test();

$new = function ($par) {
    return 'test' . $par;
};
//echo $new('uçmaz');

$arr = [
    function () {
        return '1.fonkisyon';
    },
    function () {
        return '2.fonksiyon';
    },
    function () {
        return '3.fonksiyon';
    }
];
//echo $arr[rand(0,2)]();
function filtrele($isim)
{
    return $isim . "uçmaz" . '<br>';
}

$soyad = 'uçmaz';
$arr = ['Ahmet', 'Cafer', 'Halise', 'Gül', 'Büşra'];

$arr = array_map(function ($isim) use ($soyad) {
    return $isim . $soyad . '<br>';

}, $arr);
print_r($arr);
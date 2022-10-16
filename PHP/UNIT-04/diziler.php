<?php
$ad = "Ahmethan";
$soyad = "Uçmaz";
$meslek = "Geliştirici";
$yaş = 24;

/*
 *  Dizi Tanımlama
 *      1- array()
 *      2- []

$kimlik = array(
    'ad' => "Ahmethan",
    'soyad' => "Uçmaz",
    'meslek' => "Geliştirici",
    'yaş' => 24
);
*/
/*
 *  -print_r()
 *
$kimlik2 = [
    'ad' => "Ahmethan",
    'soyad' => "Uçmaz",
    'meslek' => "Geliştirici",
    'yaş' => 24
];
print_r($kimlik2);
echo $kimlik2[ad];
*/
$kategoriler = [
    'siteler' => [
        'e-ticaret' => [
            'sahibinden',
            'n11',
            'hepsiburada',
            'gittigidiyor'

        ],
        'eğitim' => [
            'udemy',
            'prototurk',
            '93academy'
        ]
    ]
];
//print_r($kategoriler);
//echo $kategoriler['siteler']['e-ticaret'][2];

define('UYE', [
    'ahmethan',
    'uçmaz',
    'geliştirici',
    '26',
    [
        'tekvando',
        'bar sporu'
    ]
]);
//define('UYE', array());
print_r(UYE);
echo UYE[4][1];
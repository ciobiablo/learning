<?php
/*
$ahmethan = [
    'ad' => 'ahmethan',
    'soyad' => 'uçmaz',
    'siteler' => [[
        'url' => 'www.google.com',
        'baslik' => 'GOOGLE'
    ],
        [
            'url' => 'www.udemy.com',
            'baslik' => 'UDEMY'
        ]]
];


echo json_encode($ahmethan);
*/

$json ='{
  "ad": "ahmet han",
  "soyad": "uçmaz",
  "siteler": [
    {
      "url": "www.google.com",
      "baslik": "GOOGLE"
    },
    {
      "url": "www.udemy.com",
      "baslik": "UDEMY"
    }
  ]
}';

//$arr = json_decode($json,true);
//print_r($arr);

//$dizi = ['ahmet','han','uçmaz'];
//echo json_encode($dizi, JSON_FORCE_OBJECT);

$ahmet= file_get_contents('ahmet.json');
$dizi = json_decode($ahmet,true);
print_r($dizi);


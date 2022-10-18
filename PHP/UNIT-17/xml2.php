<?php

header('Content-type: text/xml');
$xml = new SimpleXMLElement('<ahmet/>');
$xml->addChild('ad', 'Ahmet Han');
$xml->addChild('soyad', 'Uçmaz');
$siteler = $xml->addChild('siteler');
$site = $siteler->addChild('site');
$site->addAttribute('id', 5);
$site->addChild('url', 'https://ucmazahmethan.life/#home');
$site->addChild('baslik', 'Kişisel Blog');
$site = $siteler->addChild('site');
$site->addAttribute('id', 6);
$site->addChild('url', 'https://prototurk.com');
$site->addChild('baslik', '$prototürk');

//echo $xml->asXML();

$dizi = [
    'ad' => 'ahmet han',
    'soyad' => 'uçmaz',
    'siteler' => [
        0 => [
            'url' => 'https://ucmazahmethan.life/#home',
            'baslik' => 'ahmet han uçmaz'
        ],
        1 => [
            'url' => 'prototurk.com',
            'baslik' => '$prototürk'
        ]
    ]
];

function array_to_xml($dizi, $xml)
{
    foreach ($dizi as $key => $val) {
        if (is_array($val)) {
            if (is_numeric($key)) {
                $key = 'site';
            }
            array_to_xml($val, $xml->addChild($key));
        } else {
            $xml->addChild($key, $val);
        }
    }
    return $xml->asXML();
}

echo array_to_xml($dizi, new SimpleXMLElement('<ahmet/>'));

?>
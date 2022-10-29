<?php


$kategoriler = [
    ['id' => '1',
        'parent' => '0',
        'ad' => 'Dersler'
    ],
    [
        'id' => '2',
        'parent' => '0',
        'ad' => 'Güncel'
    ],
    [
        'id' => '3',
        'parent' => '0',
        'ad' => 'Blog'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'ad' => 'PHP DERSLERİ'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'ad' => 'CMS DERSLERİ'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'ad' => 'fonkiyonlar'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'ad' => 'diziler'
    ],
    [
        'id' => 8,
        'parent' => 6,
        'ad' => 'sonda'
    ]

];
function kategoriListele($kategoriler, $parent = 0)
{
    $html = '';
    $html .= '<ul>';
    foreach ($kategoriler as $kategori) {

        if ($kategori['parent'] == $parent) {
            $html .= '<li>' . $kategori['ad'];
            $html .= kategoriListele($kategoriler, $kategori['id']);
            $html .= '</li>';
        }
    }
    $html .= '</ul>';
    return $html;
}

//echo kategoriListele($kategoriler);

$array = [
    'ad' => 'ahmethan',
    'soyad' => 'uçmaz',
    'sporlar' => [
        'yuzme' => 'evet',
        'koşma' => 'evet',
        'savunma sporları' => [
            'jeetkunedo' => 'evet',
            'judo' => 'evet'
        ]
    ]
];
//echo $arr['sporlar']['yuzme'];
function dizideBul($dizi, $anahtar)
{
    foreach ($dizi as $key => $value) {
        if ($key == $anahtar) {
            return $value;
        }
        if (is_array($value)) {
            $sonuc = dizideBul($value, $anahtar);
            if ($sonuc) {
                return $sonuc;
            }
        }
    }
    return false;
}

print_r(dizideBul($array, 'savunma sporları'));

<?php
/*
 *  scandir()
 * glob()
*
*/

//$dosyalar= scandir('.');
//print_r($dosyalar);

//$dosyalar= array_filter(scandir('.'),'is_dir');
//print_r($dosyalar);

//$dosyalar = glob('*{/,txt}', GLOB_BRACE);
//print_r($dosyalar);
function dosyaListele($dizinAdi)
{
    $dosyalar = scandir($dizinAdi);
    echo '<ul>';
    foreach ($dosyalar as $dosya) {
        if (!in_array($dosya, ['.', '..'])) {
            echo '<li>' . $dosya;
            if (is_dir($dizinAdi . '/' . $dosya)) {
                dosyaListele($dizinAdi . '/' . $dosya);
            }
            echo '</li>';
        }
    }
    echo '</ul>';
}

//dosyaListele('.');

function listele($dizinAdi)
{
    echo '<ul>';
    $dosyalar = glob($dizinAdi);
    foreach ($dosyalar as $dosya) {
        echo '<li>' . $dosya;
        if (is_dir($dosya)) {
            listele($dosya . '/*');
        }
        echo '</li>';
    }
    echo '</ul>';
}

listele('*');
<?php
/*
 * file_exist()
 */

if (file_exists('test.txt')) {
    echo 'test.txt dosyası mevcut.';
}

if (file_exists('test')) {
    echo 'test dosyası mevcut.';
    rmdir('test');
}
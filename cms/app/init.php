<?php
session_start(); // oturum açma işlemleri için
ob_start();

function loadClasses($className)  // sınıflarımızı yükledik.
{
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}

spl_autoload_register('loadClasses');

$config = require __DIR__ . '/config.php';  // configimi ayarladım.

try {  // veri tabanını bağladık
    $db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'], $config['db']['user'], $config['db']['pass']);
} catch (PDOException $e) {
    die($e->getMessage());
}
require __DIR__ . '/settings.php';

foreach (glob(__DIR__ . '/helper/*.php') as $helperFile){
    require $helperFile;                // helperlarımızı sayfaya dahil ettik.
}

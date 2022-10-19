<?php

session_start();
$db = new PDO('mysql:host=localhost;dbname=test1', 'root', 'root');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['token']) || $_POST['token'] != $_SESSION['token']) {
        die('Geçersiz CSRF Token!');
    }
}
$_SESSION['token'] = uniqid();
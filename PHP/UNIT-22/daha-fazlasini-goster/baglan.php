<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=loadmore', 'root', 'root');
} catch (PDOException $e) {
    echo $e->getMessage();
}
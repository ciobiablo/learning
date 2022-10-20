<?php

require 'baglan.php';

$id = $_POST['id'];

$sorgu = $db->prepare('SELECT * FROM data WHERE id < :id ORDER BY id DESC LIMIT 0,7');
$sorgu->execute([
    'id' => $id
]);
$veriler = $sorgu->fetchAll(PDO::FETCH_ASSOC);

$html = '';
foreach ($veriler as $veri) {
    ob_start();
    require 'yorum.php';
    $html .= ob_get_clean();
}

echo json_encode([
    'html' => $html,
    'gizle' => count($veriler) < 7 ? true : false
]);
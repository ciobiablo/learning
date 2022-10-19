<?php

$name = $_POST['name'];
$recaptcha = $_POST['g-recaptcha-response'];

if (!$name) {
    echo 'Adı belirtin.';
} elseif (!$recaptcha) {
    echo 'Ben robot değilim seçeneğine tıklayın.';
} else {

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => 'secret=6LcYHIQUAAAAANJbZ8LBOG7_vWW0nhcjjYx8Vk_9&response=' . $recaptcha,
        CURLOPT_RETURNTRANSFER => true
    ]);
    $output = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($output, true);

    if ($result['success'] === false) {
        echo 'Ben robot değilim seçeneğini işaretleyin!';
    } else {

        echo 'post işlemlerine buradan devam et..';

    }

}
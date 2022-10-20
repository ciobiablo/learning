<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$email = isset($_POST['email']) ? $_POST['email'] : null;
$subject = isset($_POST['subject']) ? $_POST['subject'] : 'E-posta Konusu';
$content = isset($_POST['content']) ? $_POST['content'] : null;

if (!$email) {
    echo 'E-posta adresini girin.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Lütfen geçerli bir e-posta adresi yazın.';
} elseif (!$content) {
    echo 'Lütfen e-posta içeriğini yazın.';
} else {

    $mail = new PHPMailer(true);
    try {

        $mail->setLanguage('tr');
        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ucmazahmethan@gmail.com';
        $mail->Password = 'zm%L(2akf^&{Qqkk';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        // maili gönderen kişi
        $mail->setFrom('ucmazahmethan@gmail.com', 'Ahmet Han Ucmaz');
        $mail->addAddress($email);
        $mail->addReplyTo('info@uzmancevap.org', 'Uzman Cevap');

        if (isset($_FILES['attachment']['name'])) {
            $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
        }

        //$mail->addAttachment('PHPMailer-master.zip', 'phpmailkullanimi.zip');

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $content;

        $mail->send();

        echo "Mail gönderme işlemi başarıyla gerçekleşti.";

    } catch (Exception $e) {
        echo $e->errorMessage();
    }

}
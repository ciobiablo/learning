<?php
//$*Files


if ($_FILES['dosya']['error'] == 4) {
    echo 'Lütfen dosyanızı seçin.';
} else {
    if (is_uploaded_file($_FILES['dosya']['tmp_name'])) {
        $gecerli_dosya_uzantilari = [
            'image/jpeg ',
            'image/png',
            'image/gif'
        ];
        $gecerli_dosya_boyutu = (1023 * 1024 * 3);
        $dosya_uzantisi = $_FILES['dosya']['type'];
        if (in_array($dosya_uzantisi, $gecerli_dosya_uzantilari)) {
            if ($gecerli_dosya_boyutu >= $_FILES['dosya']['size']) {
                $yukle = move_uploaded_file($_FILES['dosya']['tmp_name'], 'upload/' . $_FILES['dosya']['name']);
                if ($yukle) {
                    echo "<h3>  Dosyanı Başarıyla Yüklendi </h3>";
                    echo 'img src="upload/' . $_FILES['dosya']['name'] . '"';
                } else {
                    echo 'bir sorun oluştu ve dosyanız yüklenmedi';
                }
            } else {
                echo 'Yükleyeceğiniz dosyanın boyutu en fazla 3MB olabilir';
            }
        } else {
            echo "Dosya sadece png, jpeg ve gif formatında olabilir";
        }
    } else {
        echo 'Dosya yüklenirken bir sorun oluştu';
    }

}


copy($_FILES['dosya']['tmp_name'], 'upload' . $_FILES['dosya']['name']);


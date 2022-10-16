<?php

//$_POST
//print_r($_POST);

//echo $_POST['ad'];
if (!$_POST['Hakkımda']) {
    echo 'lütfen hakkımda bir şeyler yazın';
} else {
    print_r($_POST);
}
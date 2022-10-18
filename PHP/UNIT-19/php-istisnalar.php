<?php

// try-catch
// throw new exception
// exception extend

// parametre olacak, değeri olacak, değeri sayı olacak, değer 10a eşit olacak
//echo $_GET['id'];

/*
if (!isset($_GET['id'])){
    echo 'id parametresi yok';
} elseif (empty($_GET['id'])){
    echo 'id parametresi boş!';
} elseif (!is_numeric($_GET['id'])){
    echo 'id parametresi sayı değil!';
} elseif ($_GET['id'] != 10){
    echo 'id parametresi 10a eşit değil';
} else {
    echo $_GET['id'];
}
*/

class Hata extends Exception
{
    public function printJSON()
    {
        $data = [
            'satir' => $this->line,
            'dosya' => $this->file,
            'mesaj' => $this->message
        ];
        return json_encode($data);
    }

    public function printXML()
    {
        header('Content-type: text/xml');
        $xml = new SimpleXMLElement('<hata/>');
        $xml->addChild('satir', $this->line);
        $xml->addChild('dosya', $this->file);
        $xml->addChild('mesaj', $this->message);
        return $xml->asXML();
    }
}

try {
    if (!isset($_GET['id'])) {
        throw new Hata('id parametresi yok!');
    } elseif (empty($_GET['id'])) {
        throw new Hata('id parametresi boş!');
    } elseif (!is_numeric($_GET['id'])) {
        throw new Hata('id parametresi sayı değil!');
    } elseif ($_GET['id'] != 10) {
        throw new Hata('id parametresi 10a eşit değil');
    } else {
        echo $_GET['id'];
    }
} catch (Hata $hata) {
    if (isset($_GET['tip'])) {
        if ($_GET['tip'] == 'xml') {
            echo $hata->printXML();
        } else {
            echo $hata->printJSON();
        }
    } else {
        echo $hata->printJSON();
    }
}
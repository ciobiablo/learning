<?php

# XML
# eXtensible Markup Language

$xml = '<?xml version="1.0" encoding="UTF-8" ?>
<ahmet>
    <ad>Ahmet Han</ad>
    <soyad>Ucmaz</soyad>
    <siteler>
        <site id="5">
            <url>https://www.udemy.com/</url>
            <baslik>UDEMY</baslik>
        </site>
        <site id="6">
            <url>https://prototurk.com</url>
            <baslik>$prototürk</baslik>
        </site>
    </siteler>
</ahmet>';

$xml = simplexml_load_string($xml);

print_r($xml);

?>
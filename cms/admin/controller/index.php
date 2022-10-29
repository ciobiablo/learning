<?php
$title = 'Ana Sayfa';
$homeText = $db->query('SELECT setting_value FROM settings WHERE setting_key = "home_text"')
    ->fetch()['setting_value'];
require admin_view('index');
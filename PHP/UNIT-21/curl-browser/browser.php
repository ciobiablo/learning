<?php

if (!isset($_SERVER['HTTP_USER_AGENT'])) {
    die('Bot girisimi engellendi!');
}

echo $_SERVER['HTTP_USER_AGENT'];
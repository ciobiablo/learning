<?php

function site_url($url = false)
{
    return URL . '/' . $url;
}

function public_url($url = false)
{
    return URL . '/public/' . setting('theme') . '/' . $url;
}

function error()
{
    global $error;
    return $error ?? false;
}
function success()
{
    global $success;
    return $success ?? false;
}

<?php

define('PAGES_DIR', '../app/views/pages/');

function load()
{
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
    $page = (!$page) ? PAGES_DIR.'home.php' : PAGES_DIR.$page.'.php';
    if (!file_exists($page)) {
        throw new \Exception("Página não encontrada");
    }
    return $page;
}

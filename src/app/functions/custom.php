<?php

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function requestType()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        return $_POST;
    } else {
        return $_GET;
    }
}

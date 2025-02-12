<?php

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function request()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        return $_POST;
    } else {
        return $_GET;
    }
}

function redirct($target)
{
    return header("location: /?page={$target}");
}

function redirctToHome()
{
    return header("location: /");
}

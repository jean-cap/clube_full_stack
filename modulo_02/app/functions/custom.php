<?php

function dd($dump)
{
    echo '<pre style="color: #ffffff; background-color: #ff6600; font-size: 16px; font-weight: bold; padding: 20px">';
    var_dump($dump);
    echo '</pre>';
    die();
}

function request()
{
    $request = $_SERVER['REQUEST_METHOD'];

    if ($request === 'POST') {
        return $_POST;
    }

    return $_GET;
}

function redirect($target)
{
    return header("Location: /?page={$target}");
}

function redirectToHome()
{
    return header("Location: /");
}

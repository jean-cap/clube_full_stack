<?php

function getCsrf()
{
    $hash = bin2hex(openssl_random_pseudo_bytes(8));
    $_SESSION['csrf'] = $hash;

    return '<input name="csrf" type="hidden" value="' . $hash . '">';
}

function checkCsrf()
{
    $csrf = sanitizeString($_POST['csrf']);

    if (!$csrf) {
        throw new Exception('Token inválido.');
    }

    if (!$_SESSION['csrf']) {
        throw new Exception('Token inválido.');
    }

    if ($csrf !== $_SESSION['csrf']) {
        throw new Exception('Token inválido.');
    }

    unset($_SESSION['csrf']);
}
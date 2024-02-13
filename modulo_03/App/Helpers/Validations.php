<?php

function required($field, $param): false|string
{
    if ($_POST[$field] === '') {
        setFlash($field, "O campo <b>$field</b> é obrigatório.");
        return false;
    }

    return sanitizeString($_POST[$field]);
}

function email($field, $param)
{
    $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);

    if (!$emailIsValid) {
        setFlash($field, "O e-mail informado é inválido.");
        return false;
    }

    return filter_input(INPUT_POST, $field, FILTER_SANITIZE_EMAIL);
}

function unique($field, $param): false|string
{
    $value = sanitizeString($_POST[$field]);

    $register = findBy($param, $field, $value);

    if ($register) {
        setFlash($field, "Já existe um registro com o valor do campo <b>$field</b>.");
        return false;
    }

    return $value;
}

function maxlen($field, $param): false|string
{
    $length = strlen($_POST[$field]);
    $param = (int)$param;

    if ($length > $param) {
        setFlash($field, "O campo <b>$field</b> pode ter no máximo $param caracteres.");
        return false;
    }

    return sanitizeString($_POST[$field]);
}
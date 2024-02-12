<?php

function validate(array $validations)
{
    $result = [];
    $param = '';

    foreach ($validations as $field => $validate) {
        if (!str_contains($validate, '|')) {
            $result[$field] = singleValidation($validate, $field, $param);
        } else {
            $result[$field] = multipleValidation($validate, $field, $param);
        }
    }

    if (in_array(false, $result)) {
        return false;
    }

    return $result;
}

function singleValidation($validate, $field, $param)
{
    if (str_contains($validate, ':')) {
        [$validate, $param] = explode(':', $validate);
    }
    return $validate($field, $param);
}

function multipleValidation($validate, $field, $param)
{
    $result = '';
    $explodePipeValidate = explode('|', $validate);

    foreach ($explodePipeValidate as $validate) {
        if (str_contains($validate, ':')) {
            [$validate, $param] = explode(':', $validate);
        }

        $result = $validate($field, $param);
    }

    return $result;
}

function required($field, $param)
{
    if ($_POST[$field] === '') {
        setFlash($field, "O campo <b>{$field}</b> é obrigatório.");
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

function unique($field, $param)
{
    $value = sanitizeString($_POST[$field]);

    $register = findBy($param, $field, $value);

    if ($register) {
        setFlash($field, "Já existe um registro com o valor do campo <b>{$field}</b>.");
        return false;
    }

    return $value;
}

function maxlen($field, $param)
{
    $length = strlen($_POST[$field]);
    $param = (int)$param;

    if ($length > $param) {
        setFlash($field, "O campo <b>{$field}</b> pode ter no máximo {$param} caracteres.");
        return false;
    }

    return sanitizeString($_POST[$field]);
}
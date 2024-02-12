<?php

function validate(array $validations)
{
    $results = [];

    foreach ($validations as $field => $validate) {
        if (!str_contains($validate, '|')) {
            $results[$field] =$validate($field);
        } else {

        }
    }

    if (in_array(false, $results)) {
        return false;
    }

    return $results;
}

function required($field)
{
    if ($_POST[$field] === '') {
        setFlash($field, "O campo <b>{$field}</b> é obrigatório.");
        return false;
    }

    return strip_tags($_POST[$field]);
}
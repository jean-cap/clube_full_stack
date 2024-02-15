<?php

function validate(array $validations, bool $persistInputs = false, bool $checkCsrf = false): false|array
{
    if ($checkCsrf) {
        checkCsrf();
    }
    
    $result = [];
    $param = '';

    foreach ($validations as $field => $validate) {
        if (!str_contains($validate, '|')) {
            $result[$field] = singleValidation($validate, $field, $param);
        } else {
            $result[$field] = multipleValidation($validate, $field, $param);
        }
    }

    if ($persistInputs) {
        setOld();
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
    $result = [];
    $explodePipeValidate = explode('|', $validate);

    foreach ($explodePipeValidate as $validate) {
        if (str_contains($validate, ':')) {
            [$validate, $param] = explode(':', $validate);
        }

        $result[$field] = $validate($field, $param);

        if (isset($result[$field]) && $result[$field] === false) {
            break;
        }
    }

    return $result[$field];
}
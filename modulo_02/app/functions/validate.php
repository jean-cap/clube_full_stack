<?php

function validate(array $fields)
{
    $request = request();
    $validate = [];

    foreach ($fields as $field => $type) {
        switch ($type) {
            case 'text':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                break;
            case 'email':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
            default:
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                break;
        }
    }

    return (object)$validate;
}

function isEmpty()
{
    $request = request();
    $empty = false;

    foreach ($request as $key => $value) {
        if (empty($request[$key])) {
            $empty = true;
        }
    }

    return $empty;
}

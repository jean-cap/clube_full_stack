<?php

function validate(array $fields)
{
    $validate = [];

    foreach ($fields as $field => $type) {
        switch ($type) {
            case 'text':
                $validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                break;
            case 'email':
                $validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_EMAIL);
                break;
            default:
                $validate[$field] = filter_var($_POST[$field], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                break;
        }
    }

    return (object)$validate;
}

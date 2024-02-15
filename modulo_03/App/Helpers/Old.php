<?php

function setOld()
{
    $_SESSION['old'] = $_POST ?? [];
}

function getOld(string $field): string
{
    if (isset($_SESSION['old'][$field])) {
        $old = $_SESSION['old'][$field];
        unset($_SESSION['old'][$field]);
    }
    return $old ?? '';
}
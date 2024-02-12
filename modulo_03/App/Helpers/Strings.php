<?php

function sanitizeString(string $string): string
{
    $value = trim($string);
    $value = strip_tags($value);
    return htmlspecialchars($value, ENT_QUOTES);
}
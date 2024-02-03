<?php

$number1 = 34;
$number2 = '44.21';

if (is_numeric($number1) && is_numeric($number2)) {
    echo 'Os valores são numéricos.';
} else {
    echo 'Os valores não são numéricos.';
}

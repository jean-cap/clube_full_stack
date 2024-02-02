<?php

// Operadores lógicos:

$canAccess = true;
$isOlder = false;

$result = $canAccess && $isOlder; // false
$result = $canAccess || $isOlder; // true

var_dump($result);

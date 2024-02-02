<?php

// Operadores de comparação:

// != verifica se o valor é diferente
// !== verifica se o valor é diferente ou o tipo é diferente
// == verifica se o valor é igual
// === verifica se o valor é igual e o tipo é igual

$result = 30 < 50; // true
$result = 30 > 50; // false
$result = 30 <= 50; // true
$result = 30 >= 50; // false

$result = 30 != 50; // true
$result = 50 != 50; // false
$result = '50' != 50; // false (o tipo de dado é diferente, mas aqui isso não é verificado)
$result = 30 !== 50; // true
$result = 50 !== 50; // false
$result = '50' !== 50; // true (o valor é igual mas o tipo de dado é diferente)

$result = 30 == 50; // false
$result = 50 == 50; // true
$result = 30 === 50; // false
$result = 50 === 50; // true
$result = '50' === 50; // false (o valor é igual mas o tipo de dado é diferente)

var_dump($result);

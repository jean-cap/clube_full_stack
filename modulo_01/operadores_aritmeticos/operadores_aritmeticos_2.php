<?php

// Precedência de Operadores
// https://www.php.net/manual/pt_BR/language.operators.precedence.php

$number_1 = 10;
$number_2 = 20;

// Primeiro resolve a multiplicação e depois soma 5 ao resultado:
$operacao = $number_1 * $number_2 + 5;

echo $operacao; // 205
<?php

$name = 'Jean Carlos';
$age = 18;
$person = ['name' => 'Jean Carlos', 'age' => 18];

// transformando para boolean:
$change = (bool)$name; // true
$change = (bool)$age; // true

// transformando para string:
$change = (string)$age; // "18"

// convertendo para float:
$change = (float)$age; // 18

// convertendo em objeto:
// object(stdClass)#1 (2) {
//     ["name"]=> string(11) "Jean Carlos"
//     ["age"]=> int(18)
// }
$change = (object)$person;

var_dump($change);

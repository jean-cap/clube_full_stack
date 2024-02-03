<?php

// Verificando se uma variável existe
$name = 'Jean Carlos';

if (isset($name)) {
    echo 'A variável $name existe.';
} else {
    echo 'A variável $name não existe.';
}

echo PHP_EOL;

// isset() retornará false ao verificar uma variável que foi atribuída com o valor null
$space = null;

if (isset($space)) {
    echo 'A variável $space existe.';
} else {
    echo 'A variável $space não existe.';
}

echo PHP_EOL;

// Funciona também com arrays
$person = ['name' => 'Jean Carlos', 'age' => 18];

if (isset($person['name'])) {
    echo 'O índice existe no array $person.';
} else {
    echo 'O índice não existe no array $person.';
}

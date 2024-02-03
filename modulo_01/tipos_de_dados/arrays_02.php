<?php

$person = [
    'name' => 'Jean Carlos',
    'age' => 18,
    'documents' => [
        'cpf' => '000.000.000-00',
        'rg' => '0000000-0'
    ]
];

echo $person['documents']['cpf']; // 000.000.000-00

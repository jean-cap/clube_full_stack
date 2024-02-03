<?php

$names = array('Jean', 'Bianca', 'Nilce');
echo $names[1]; // Bianca

$data = ['Jean Carlos', 18, true];

// Adicionando valor no índice 3:
$data[3] = 'Brasil';

// Adicionando valor no fim do array:
array_push($data, 'Santa Catarina');

// Adicionando valor no início do array:
array_unshift($data, 'Masculino');

print_r($data);

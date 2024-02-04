<?php

require_once '../../../bootstrap.php';

// Verifica se o tipo de requisição é a esperada
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validate = validate([
        'name' => 'text',
        'email' => 'email',
        'subject' => 'text',
        'message' => 'text'
    ]);
    dd($validate->message);
} else {
    echo 'Não há nada aqui.';
}

<?php

// Verifica se o tipo de requisição é a esperada
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validate = validate([
        'name' => 'text',
        'email' => 'email',
        'subject' => 'text',
        'message' => 'text'
    ]);
    print_r($_POST);
} else {
    echo 'Não há nada aqui.';
}

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = strip_tags($_POST['name']);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Olá {$name}, cadastramos seu email <b>{$email}</b> com sucesso.";
        } else {
            echo 'O e-mail informado é inválido.';
        }
    } else {
        echo 'Não há informações de cadastro.';
    }
}

<?php

if (isset($_POST['name']) && isset($_POST['email'])) {
    echo "Olá {$_POST['name']}, cadastramos seu email <b>{$_POST['email']}</b> com sucesso.";
} else {
    echo 'Não há informações de cadastro.';
}

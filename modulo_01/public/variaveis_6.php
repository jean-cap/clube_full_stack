<?php

setcookie('name', 'Jean Carlos', time() + 120);

// Para excluir o cookie
// setcookie('name', 'Jean Carlos', time() -1);

echo 'Olá! Configurei um cookie no seu navegador.';

echo '<hr>';

if (isset($_COOKIE['name'])) {
    echo 'O valor do cookie é ' . $_COOKIE['name'];
}
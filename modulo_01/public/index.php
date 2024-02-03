<?php

include_once '../includes/primeiro_include.php';

session_start();

echo 'Olá mundo! Meu nome é ' . $name . '!';

echo '<hr>';

if (isset($_SESSION['name'])) {
    echo "<b>Seja bem vindo {$_SESSION['name']}!</b>";
}

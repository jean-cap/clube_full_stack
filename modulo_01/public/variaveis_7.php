<?php

session_start();

$_SESSION['name'] = 'Jean Carlos';

echo 'Olá! Criamos uma sessão para você com o ID <b>' . session_id() . '</b>.<br>';
echo 'Se você acessar a página inicial agora, deve ver uma menságem de bem vindo.';

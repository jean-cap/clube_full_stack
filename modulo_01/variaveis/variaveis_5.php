<?php

// Escopo Global
$name = 'Jean Carlos';

// Escopo Local
function saldacao()
{
    global $name;
    return "Olá! Meu nome é $name.";
}

echo saldacao();

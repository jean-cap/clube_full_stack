<?php

// Constantes mágicas
function teste_1()
{
    // Retorna o nome da função:
    echo __FUNCTION__;
}

function teste_2()
{
    // Retorna o nome do método:
    echo __METHOD__;
}

// teste_1();
// teste_2();

// Retorna o divisor de diretório do sistema operacional:
echo DIRECTORY_SEPARATOR;

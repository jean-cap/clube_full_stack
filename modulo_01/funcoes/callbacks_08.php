<?php

function saldacao($name, $age)
{
    return "Olá! Meu nome é $name e tenho $age anos.";
}

echo call_user_func_array('saldacao', ['Jean Carlos', 18]);

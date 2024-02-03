<?php

function apresentacao($name, $age)
{
    return "Meu nome é $name, tenho $age anos.";
}

function execute($callback)
{
    return call_user_func($callback, 'Jean Carlos', 18);
}

echo execute('apresentacao');

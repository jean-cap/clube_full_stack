<?php

function teste1($name)
{
    return "Meu nome é $name.";
}

function teste2($callback)
{
    return $callback('Jean Carlos');
}

echo teste2('teste1');

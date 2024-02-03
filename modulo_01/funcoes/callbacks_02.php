<?php

function teste1($name)
{
    return "Meu nome é $name.";
}

function teste2($callback)
{
    if (is_callable($callback)) {
        return $callback('Jean Carlos');
    }
}

echo teste2('teste1');

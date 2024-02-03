<?php

function teste($name)
{
    $person = function () use ($name) {
        return "Meu nome é $name.";
    };

    return $person;
}

echo teste('Jean Carlos')();

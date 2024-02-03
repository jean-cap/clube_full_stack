<?php

function teste($name)
{
    return "Meu nome é $name.";
}

echo call_user_func('teste', 'Jean Carlos');

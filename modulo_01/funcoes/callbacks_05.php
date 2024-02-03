<?php

class User
{
    public static function apresentacao($name, $age)
    {
        return "Meu nome é $name, tenho $age anos.";
    }
}

echo call_user_func(['User', 'apresentacao'], 'Jean Carlos', 18);

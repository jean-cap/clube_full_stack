<?php

class User
{
    public function apresentacao($name, $age)
    {
        return "Meu nome é $name, tenho $age anos.";
    }
}

$user = new User;

echo call_user_func([$user, 'apresentacao'], 'Jean Carlos', 18);

<?php

class User
{
    public function __invoke()
    {
        return 'teste';
    }
}

function teste($callback)
{
    return $callback();
}

$user = new User;

echo teste($user);

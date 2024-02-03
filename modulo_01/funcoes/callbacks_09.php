<?php

$user = function () {
    return 'teste';
};

function teste($callback)
{
    return $callback();
}

echo teste($user);

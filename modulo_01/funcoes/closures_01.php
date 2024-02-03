<?php

$person = function ($name) {
    return "Meu nome é $name.";
};

var_dump($person('Jean Carlos')); // Meu nome é Jean Carlos.

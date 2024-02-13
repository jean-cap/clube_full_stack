<?php

return [
    'POST' => [
        '/login' => 'Login@store',
        '/user/store' => 'User@store',
        '/user/update' => 'User@update'
    ],
    'GET' => [
        '/' => 'Home@index',
        '/user/create' => 'User@create',
        '/user/[a-z0-9]+' => 'User@show',
        '/user/[a-z0-9]+/name/[a-z]+' => 'User@show',
        '/login' => 'Login@index',
        '/logout' => 'Login@destroy'
    ]
];

<?php

namespace JeanCap\CursoPhpPro\Controllers;

class User
{
    public function index($params)
    {
        return [
            'view' => 'User',
            'data' => ['title' => 'Usuários']
        ];
    }

    public function show($params)
    {
        if (!isset($params['user'])) {
            return redirect('/');
        };

        $user = findBy('users', 'id', $params['user']);

        return [
            'view' => 'User',
            'data' => [
                'title' => 'Usuários',
                'user' => $user
            ]
        ];
    }
}

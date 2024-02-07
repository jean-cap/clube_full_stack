<?php

namespace JeanCap\CursoPhpPro\Controllers;

class Home
{
    public function index($params)
    {
        $users = all('users');

        return [
            'view' => 'Home',
            'data' => [
                'title' => 'Página Inicial',
                'users' => $users
                ]
        ];
    }
}

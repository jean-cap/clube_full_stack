<?php

namespace JeanCap\CursoPhpPro\Controllers;

class Login
{
    public function index($params)
    {
        return [
            'view' => 'Login',
            'data' => [
                'title' => 'Login'
            ]
        ];
    }

    public function store($params)
    {
    }
}

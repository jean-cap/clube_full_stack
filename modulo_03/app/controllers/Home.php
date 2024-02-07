<?php

namespace JeanCap\CursoPhpPro\Controllers;

class Home
{
    public function index($params)
    {
        return [
            'view' => 'home',
            'data' => ['title' => 'Curso PHP Profissional']
        ];
    }
}

<?php

namespace JeanCap\CursoPhpPro\Controllers;

class Users
{
    public function index()
    {
        $users = all('users', 'nome, sobrenome, email');
        echo json_encode($users);
    }
}
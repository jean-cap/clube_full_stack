<?php

namespace JeanCap\CursoPhpPro\Controllers;

class User
{
    public function index($params): array
    {
        return [
            'view' => 'User',
            'data' => ['title' => 'Usuários']
        ];
    }

    public function show($params): ?array
    {
        if (!isset($params['user'])) {
            return redirect('/');
        }

        $user = findBy('users', 'id', $params['user']);

        return [
            'view' => 'User',
            'data' => [
                'title' => 'Usuários',
                'user' => $user
            ]
        ];
    }

    public function create($params): array
    {
        return [
            'view' => 'UserCreate',
            'data' => [
                'title' => 'Cadastrar Usuários'
            ]
        ];
    }

    public function store()
    {
        $validate = validate([
            'nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required|maxlen:10'
        ], persistInputs: true, checkCsrf: true);

        if (!$validate) {
            return redirect('/user/create');
        }

        $validate['password'] = password_hash($validate['password'], PASSWORD_DEFAULT);

        $inserted = dbCreate('users', $validate);

        if (!$inserted) {
            setFlash('message', 'Ocorreu um erro ao cadastrar, tente novamente em alguns minutos.');
            return redirect('/user/create');
        }

        setFlash('message', 'Usuário cadastrado com sucesso');
        return redirect('/');
    }

    public function update()
    {
        $arr = [
            'nome' => 'Carine',
            'sobrenome' => 'Pereira',
            'email' => 'carine@gmail.com',
            'password' => '$2y$10$acvc84CyEZ/n6aSD8TPVJuilGZKMTNTg6Q8gfENVg5XuIQymRcoha'
        ];

        dbUpdate('users', $arr, ['id' => '5']);
    }
}

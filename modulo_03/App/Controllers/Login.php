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
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);


        if (empty($email) || empty($password)) {
            return setMessageAndRedirect('message', 'Os campos são obrigatórios.', '/login');
        }

        $user = findBy('users', 'email', $email);

        if (!$user) {
            return setMessageAndRedirect('message', 'Usuário ou senha estão incorretos.', '/login');
        }

        if (!password_verify($password, $user->password)) {
            return setMessageAndRedirect('message', 'Usuário ou senha estão incorretos.', '/login');
        }

        $_SESSION[LOGGED] = $user;
        return redirect('/');
    }

    public function destroy()
    {
        unset($_SESSION[LOGGED]);

        return redirect('/');
    }
}

<?php

require_once '../../../bootstrap.php';

if (isEmpty()) {
    setFlashMessage('message', 'Preencha todos os campos.');
    return redirect('create_user');
}

$validate = validate([
    'nome' => 'text',
    'sobrenome' => 'text',
    'email' => 'email',
    'password' => 'text'
]);

$created = create('users', $validate);

if ($created) {
    setFlashMessage('message', 'Usuário cadastrado com sucesso.', 'success');
} else {
    setFlashMessage('message', 'Erro ao cadastrar usuário.');
}

redirect('create_user');

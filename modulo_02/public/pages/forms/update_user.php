<?php

require_once '../../../bootstrap.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$uriRedirect = "edit_user&id={$id}";

if (isEmpty()) {
    setFlashMessage('message', 'Preencha todos os campos.');
    return redirect($uriRedirect);
}

$validate = validate([
    'nome' => 'text',
    'sobrenome' => 'text',
    'email' => 'email'
]);

$updated = update('users', $validate, ['id', $id]);

if ($updated) {
    setFlashMessage('message', 'Usuário atualizado com sucesso.', 'success');
} else {
    setFlashMessage('message', 'Erro ao atualizar usuário.');
}

redirect($uriRedirect);

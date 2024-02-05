<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deleted = delete('users', 'id', $id);

if ($deleted) {
    setFlashMessage('message', 'Usuário deletado com sucesso.', 'success');
} else {
    setFlashMessage('message', 'Erro ao deletar usuário.');
}

redirectToHome();

<?php

require_once '../../../bootstrap.php';

if (isEmpty()) {
    setFlashMessage('message', 'Preencha todos os campos.');
    return redirect('contato');
}

$validate = validate([
    'name' => 'text',
    'email' => 'email',
    'subject' => 'text',
    'message' => 'text'
]);

if (sendPHPMailer((array)$validate)) {
    setFlashMessage('message', 'E-mail enviado com sucesso.', 'success');
} else {
    setFlashMessage('message', 'Erro no envio do e-mail');
}

return redirect('contato');

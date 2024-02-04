<?php

require_once '../../../bootstrap.php';

if (isEmpty()) {
    setFlashMessage('message', 'Preencha todos os campos.');
    header("Location: http://modulo_02.test/?page=contato");
    die();

    // return redirect('?page=contato');
}

// $validate = validate([
//     'name' => 'text',
//     'email' => 'email',
//     'subject' => 'text',
//     'message' => 'text'
// ]);

// dd($validate->message);

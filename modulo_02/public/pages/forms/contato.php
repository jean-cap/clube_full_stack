<?php

require_once '../../../bootstrap.php';

$validate = validate([
    'name' => 'text',
    'email' => 'email',
    'subject' => 'text',
    'message' => 'text'
]);

dd($validate->message);

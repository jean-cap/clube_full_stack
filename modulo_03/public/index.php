<?php

require 'bootstrap.php';

try {
    $data = router();
    $viewFileName = VIEWS . $data['view'] . '.php';

    if (!isset($data['data'])) {
        throw new Exception('O índice data está faltando.');
    }

    if (!isset($data['data']['title'])) {
        throw new Exception('O índice title está faltando.');
    }

    if (!isset($data['view'])) {
        throw new Exception('A view não foi configurada.');
    }

    if (!file_exists($viewFileName)) {
        throw new Exception("O arquivo da view {$data['view']} não existe.");
    }

    extract($data['data']);

    require_once VIEWS . 'master.php';
} catch (Exception $e) {
    dump($e->getMessage());
}

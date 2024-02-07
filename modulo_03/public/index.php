<?php

require 'bootstrap.php';

try {
    $data = router();
    $viewFileName = VIEWS . $data['view'] . '.php';

    extract($data['data']);

    if (!isset($data['view'])) {
        throw new Exception('A view não foi configurada.');
    }

    if (!file_exists($viewFileName)) {
        throw new Exception("O arquivo da view {$data['view']} não existe.");
    }

    require_once VIEWS . 'master.php';
} catch (Exception $e) {
    dump($e->getMessage());
}

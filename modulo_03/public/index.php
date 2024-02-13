<?php

require 'bootstrap.php';

try {
    $data = router();

    if (isAjax()) {
        die();
    }

    if (!isset($data['data'])) {
        throw new Exception('O índice data está faltando.');
    }

    if (!isset($data['data']['title'])) {
        throw new Exception('O índice title está faltando.');
    }

    if (!isset($data['view'])) {
        throw new Exception('A view não foi configurada.');
    }

    $viewFileName = VIEWS . $data['view'] . '.php';

    if (!file_exists($viewFileName)) {
        throw new Exception("O arquivo da view {$data['view']} não existe.");
    }

    // Create new Plates instance
    $templates = new League\Plates\Engine(VIEWS);

    // Render a template
    echo $templates->render($data['view'], $data['data']);
} catch (Exception $e) {
    dump($e->getMessage());
}

<?php

function routes(): array
{
    return require 'routes.php';
}

function router()
{
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routes = routes();

    $matchedUri = exactMatchUriInArrayRoutes($uri, $routes);

    $params = [];

    if (empty($matchedUri)) {
        $matchedUri = regularExpressionMatchArrayRoutes($uri, $routes);
        $uriElements = explode('/', ltrim($uri, '/'));

        $params = getParams($uriElements, $matchedUri);
        $params = formatParams($uriElements, $params);
    }

    if (!empty($matchedUri)) {
        return controller($matchedUri, $params);
    }

    throw new Exception('Algo deu errado.');
}

function exactMatchUriInArrayRoutes(string $uri, array $routes): array
{
    if (array_key_exists($uri, $routes)) {
        return [$uri => $routes[$uri]];
    }

    return [];
}

function regularExpressionMatchArrayRoutes(string $uri, array $routes): array
{
    return array_filter($routes, function ($key) use ($uri) {
        $regex = str_replace('/', '\/', ltrim($key, '/'));
        return preg_match("/^$regex$/", ltrim($uri, '/'));
    }, ARRAY_FILTER_USE_KEY);
}

function getParams(array $uriElements, array $matchedUri): array
{
    if (!empty($matchedUri)) {
        $matchedToGetParams = array_keys($matchedUri)[0];
        $matchedToGetParams = explode('/', ltrim($matchedToGetParams, '/'));

        return array_diff($uriElements, $matchedToGetParams);
    }

    return [];
}

function formatParams(array $uriElements, array $params): array
{
    $paramsData = [];
    foreach ($params as $index => $param) {
        $paramsData[$uriElements[$index - 1]] = $param;
    }

    return $paramsData;
}

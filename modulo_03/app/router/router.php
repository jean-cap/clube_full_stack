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

    if (empty($matchedUri)) {
        $matchedUri = regularExpressionMatchArrayRoutes($uri, $routes);

        $params = getParams($uri, $matchedUri);
    }
}

function exactMatchUriInArrayRoutes($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        return [$uri => $routes[$uri]];
    }

    return [];
}

function regularExpressionMatchArrayRoutes($uri, $routes)
{
    return array_filter($routes, function ($key) use ($uri) {
        $regex = str_replace('/', '\/', ltrim($key, '/'));
        return preg_match("/^$regex$/", ltrim($uri, '/'));
    }, ARRAY_FILTER_USE_KEY);
}

function getParams($uri, $matchedUri)
{
    if (!empty($matchedUri)) {
        $matchedToGetParams = array_keys($matchedUri)[0];
        $matchedToGetParams = explode('/', ltrim($matchedToGetParams, '/'));

        $uriToGetParams = explode('/', ltrim($uri, '/'));

        return array_diff($uriToGetParams, $matchedToGetParams);
    }

    return [];
}

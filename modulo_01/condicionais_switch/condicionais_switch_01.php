<?php

$request = 'get';

switch ($request) {
    case 'get':
        echo 'A requisição é do tipo GET';
        break;
    case 'post':
        echo 'A requisição é do tipo POST';
        break;
    case 'delete':
        echo 'A requisição é do tipo DELETE';
        break;
    default:
        echo 'Tipo de requisição não suportada';
        break;
}

<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';

switch ($request) {

    case '':
    case '/':
        require __DIR__ . $viewDir . 'info.php';
        break;

    case '/login':
        require __DIR__ . $viewDir . 'login.php';
        break;

    case '/register':
        require __DIR__ . '/views/register.php';
        break;

    case '/processing':
        require __DIR__ . '/controllers/Register.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}


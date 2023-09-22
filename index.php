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

    case '/processing/registration':
        require __DIR__ . '/controllers/Register.controller.php';
        break;

    case '/home':
        require __DIR__ . '/views/home.php';
        break;
        
    case '/processing/login':
        require __DIR__ . '/controllers/Login.controller.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}


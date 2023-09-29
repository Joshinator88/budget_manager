<?php


// TODO:
// direct to controllers and return a view when we walked through a controller

$request = $_SERVER['REQUEST_URI'];
$viewDir = './views/';

// change routing into this
$routes = [
    '/' => $viewDir . "info.php",
    '' => $viewDir . "info.php",
    '/login' => $viewDir . 'login.php',
    '/register' => $viewDir . 'register.php',
    '/home' =>  "./controllers/Home.controller.php",
    '/processing/registration' => './controllers/Register.controller.php',
    '/processing/login' => './controllers/Login.controller.php'
];

require $routes[$_SERVER['REQUEST_URI']];

// __DIR__ === ./; het is om vanaf de root het pad te volgen

//     default:
//         http_response_code(404);
//         require __DIR__ . $viewDir . '404.php';
// }


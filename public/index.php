<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();

// Rotas
$router->add('/', 'UserController', 'index');
$router->add('/login', 'UserController', 'login');
$router->add('/product', 'ProdutoController', 'index');

// Obter URL atual
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($url);
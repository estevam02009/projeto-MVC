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

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - MVC</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Bem vindo ao sistema!</h1>
    <script src="assets/script.js"></script>
</body>
</html>
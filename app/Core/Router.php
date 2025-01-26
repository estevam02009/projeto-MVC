<?php

namespace App\Core;

class Router 
{
    private $routes = [];

    public function add($method, $path, $controller)
    {
        $this->routes[$path] = ['controller' => $controller, 'method' => $method];
    }

    public function dispatch($url)
    {
        foreach ($this->routes as $path => $info) {
            if ($path === $url) {
                $controller = "App\\Controllers\\" . $info['controller'];
                $method = $info['method'];
    
                $controllerInstance = new $controller();
                $controllerInstance->$method();
                return;
            }
        }

        // echo "404 Not Found";
    }
}
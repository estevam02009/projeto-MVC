<?php

namespace App\Core;

class View 
{
    public static function render($view, $data = [])
    {
        extract($data); // Extrai os dados como variaveis
        $viewPath = __DIR__ . "/../Views/' . $view . '.php";

        if (file_exists($viewPath)) {
            include __DIR__ . "/../Views/layouts/header.php";
            include $viewPath;
            include __DIR__ . "/../Views/layouts/footer.php";
        } else {
            echo "Á view '{$view}' não foi encontrada.";
        }
    }
}
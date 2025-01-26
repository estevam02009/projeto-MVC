<?php

namespace App\Controllers;

use App\Models\User;

class UserController 
{
    public function index()
    {
        echo 'Página inicial de usuários.';
    }

    public function login()
    {
        echo 'Página de login de usuários.';
    }
}
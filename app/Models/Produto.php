<?php

namespace App\Models;

use App\Core\Database;

class Produto
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAll()
    {
        $stmt = $this->query("SELECT * FROM produtos");
        return $stmt->fetchAll();
    }
}
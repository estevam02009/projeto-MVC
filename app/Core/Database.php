<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private static $instance;

    public static function getConnection()
    {
        if (!self::$instance) {
            $config = include __DIR__ . '/.../config.php';

            try {
                self::$instance = new PDO(
                    "mysql:host{$config['db']['host']};dbname={$config['db']['dbname']}",
                    $config['db']['user'],
                    $config['db']['password']
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erro de conexão: ' . $e->getMessage());
            }
        }

        return self::$instance;
    }
}
<?php

declare(strict_types=1);

namespace App;

require_once __DIR__ . '/../db/config.php';

use PDO;
use PDOException;
use RuntimeException;

class Database
{
    private static ?PDO $pdo = null;

    public function __construct()
    {
        $this->connect();
    }

    public function pdo(): PDO
    {
        return self::$pdo;
    }

    private function connect(): void
    {
        try {
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
            self::$pdo = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            throw new RuntimeException('Nepodarilo sa pripojiť k databáze: ' . $e->getMessage());
        }
    }
}
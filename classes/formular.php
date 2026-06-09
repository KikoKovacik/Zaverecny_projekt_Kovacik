<?php

declare(strict_types=1);

namespace formular;

require_once __DIR__ . '/../db/config.php';

use PDO;
use PDOException;
use RuntimeException;

class Kontakt
{
    private PDO $pdo;

    public function __construct()
    {
        $this->connectDatabase();
    }

    public function ulozitSpravu(string $meno, string $email, string $sprava): bool
    {
        try {
            $sql = 'INSERT INTO spravy (meno, email, sprava, cas) VALUES (:meno, :email, :sprava, NOW())';
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                ':meno' => $meno,
                ':email' => $email,
                ':sprava' => $sprava,
            ]);
        } catch (PDOException $e) {
            throw new RuntimeException('Chyba pri ukladaní správy: ' . $e->getMessage());
        }
    }

    public function __destruct()
    {
    }

    private function connectDatabase(): void
    {
        try {
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            throw new RuntimeException('Nepodarilo sa pripojiť k databáze: ' . $e->getMessage());
        }
    }
}

<?php

declare(strict_types=1);

namespace App;

use PDO;

class SpravaManager
{
    private Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function createMessage(string $meno, string $email, string $sprava): bool
    {
        $stmt = $this->database->pdo()->prepare(
            'INSERT INTO spravy (meno, email, sprava, cas, poznamka) VALUES (:meno, :email, :sprava, NOW(), NULL)'
        );

        return $stmt->execute([
            ':meno' => $meno,
            ':email' => $email,
            ':sprava' => $sprava,
        ]);
    }

    public function getMessages(): array
    {
        $stmt = $this->database->pdo()->query('SELECT id, meno, email, sprava, cas, poznamka FROM spravy ORDER BY cas DESC, id DESC');

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMessageById(int $id): ?array
    {
        $stmt = $this->database->pdo()->prepare('SELECT id, meno, email, sprava, cas, poznamka FROM spravy WHERE id = :id');
        $stmt->execute([':id' => $id]);
        $message = $stmt->fetch(PDO::FETCH_ASSOC);

        return $message ?: null;
    }

    public function updateNote(int $id, ?string $poznamka): bool
    {
        $stmt = $this->database->pdo()->prepare('UPDATE spravy SET poznamka = :poznamka WHERE id = :id');

        return $stmt->execute([
            ':id' => $id,
            ':poznamka' => $poznamka,
        ]);
    }

    public function deleteMessage(int $id): bool
    {
        $stmt = $this->database->pdo()->prepare('DELETE FROM spravy WHERE id = :id');

        return $stmt->execute([':id' => $id]);
    }
}
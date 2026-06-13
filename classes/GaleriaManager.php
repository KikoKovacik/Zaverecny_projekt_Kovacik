<?php

declare(strict_types=1);

namespace App;

use PDO;

class GaleriaManager
{
    private Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function getImages(): array
    {
        $stmt = $this->database->pdo()->prepare('SELECT * FROM galeria ORDER BY cas_pridania DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addImage(string $path, ?string $description = null): bool
    {
        $stmt = $this->database->pdo()->prepare('INSERT INTO galeria (cesta_k_suboru, popis) VALUES (:cesta, :popis)');
        return $stmt->execute([
            ':cesta' => $path,
            ':popis' => $description
        ]);
    }

    public function updateDescription(int $id, ?string $description): bool
    {
        $stmt = $this->database->pdo()->prepare('UPDATE galeria SET popis = :popis WHERE id = :id LIMIT 1');
        return $stmt->execute([
            ':popis' => $description,
            ':id' => $id
        ]);
    }

    public function deleteImage(int $id): bool
    {
        // Najprv zistime cestu pre zmazanie fyzickeho suboru
        $stmt = $this->database->pdo()->prepare('SELECT cesta_k_suboru FROM galeria WHERE id = :id LIMIT 1');
        $stmt->execute([':id' => $id]);
        $image = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($image) {
            $filePath = __DIR__ . '/../' . ltrim((string) $image['cesta_k_suboru'], '/');
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $stmtDel = $this->database->pdo()->prepare('DELETE FROM galeria WHERE id = :id LIMIT 1');
            return $stmtDel->execute([':id' => $id]);
        }
        
        return false;
    }
}

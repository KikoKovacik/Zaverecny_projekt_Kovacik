<?php

declare(strict_types=1);

use App\Database;

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $db = new Database();
    $sql = "
        CREATE TABLE IF NOT EXISTS galeria (
            id INT AUTO_INCREMENT PRIMARY KEY,
            cesta_k_suboru VARCHAR(255) NOT NULL,
            popis VARCHAR(255) NULL,
            cas_pridania TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";
    $db->pdo()->exec($sql);
    echo "Tabulka galeria bola uspesne vytvorena.\n";
} catch (Exception $e) {
    echo "Chyba: " . $e->getMessage() . "\n";
}

<?php

declare(strict_types=1);

namespace formular;

require_once __DIR__ . '/../db/config.php';

use RuntimeException;

class Kontakt
{
    private string $jsonFile;

    public function __construct()
    {
        $this->jsonFile = DATABASE['JSON_FILE'];
        $this->initializeStorage();
    }

    public function ulozitSpravu(string $meno, string $email, string $sprava): bool
    {
        $records = $this->loadRecords();

        $records[] = [
            'id' => $this->getNextId($records),
            'meno' => $meno,
            'email' => $email,
            'sprava' => $sprava,
            'created_at' => date('c'),
        ];

        return $this->saveRecords($records);
    }

    public function __destruct()
    {
        // Intentionally empty. Present to mirror OOP lifecycle from exercises.
    }

    private function initializeStorage(): void
    {
        if (!is_file($this->jsonFile)) {
            file_put_contents($this->jsonFile, "[]\n", LOCK_EX);
        }
    }

    private function loadRecords(): array
    {
        $raw = file_get_contents($this->jsonFile);

        if ($raw === false) {
            throw new RuntimeException('Nepodarilo sa nacitat JSON ulozisko.');
        }

        $decoded = json_decode($raw, true);

        if (!is_array($decoded)) {
            throw new RuntimeException('JSON ulozisko je poskodene.');
        }

        return $decoded;
    }

    private function saveRecords(array $records): bool
    {
        $json = json_encode($records, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        if ($json === false) {
            throw new RuntimeException('Nepodarilo sa serializovat data do JSON.');
        }

        return file_put_contents($this->jsonFile, $json . PHP_EOL, LOCK_EX) !== false;
    }

    private function getNextId(array $records): int
    {
        if ($records === []) {
            return 1;
        }

        $last = end($records);
        $lastId = is_array($last) ? (int) ($last['id'] ?? 0) : 0;

        return $lastId + 1;
    }
}

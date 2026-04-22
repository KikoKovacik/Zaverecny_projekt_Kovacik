<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';

function loadRecords(string $jsonFile): array
{
    if (!is_file($jsonFile)) {
        file_put_contents($jsonFile, "[]\n", LOCK_EX);
    }

    $raw = file_get_contents($jsonFile);
    if ($raw === false) {
        return [];
    }

    $decoded = json_decode($raw, true);
    return is_array($decoded) ? $decoded : [];
}

function saveRecords(string $jsonFile, array $records): bool
{
    $json = json_encode($records, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    if ($json === false) {
        return false;
    }

    return file_put_contents($jsonFile, $json . PHP_EOL, LOCK_EX) !== false;
}

function getNextId(array $records): int
{
    if ($records === []) {
        return 1;
    }

    $last = end($records);
    $lastId = is_array($last) ? (int) ($last['id'] ?? 0) : 0;

    return $lastId + 1;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../kontakt.php');
    exit;
}

$meno = trim($_POST['meno'] ?? '');
$email = trim($_POST['email'] ?? '');
$sprava = trim($_POST['sprava'] ?? '');
$suhlas = isset($_POST['suhlas']);

if ($meno === '' || $email === '' || $sprava === '' || !$suhlas) {
    header('Location: ../kontakt.php?error=1');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../kontakt.php?error=2');
    exit;
}

try {
    $jsonFile = DATABASE['JSON_FILE'];
    $records = loadRecords($jsonFile);

    $records[] = [
        'id' => getNextId($records),
        'meno' => $meno,
        'email' => $email,
        'sprava' => $sprava,
        'created_at' => date('c'),
    ];

    $ok = saveRecords($jsonFile, $records);

    if ($ok) {
        header('Location: ../thankyou.php');
        exit;
    }

    header('Location: ../kontakt.php?error=3');
    exit;
} catch (Throwable $e) {
    header('Location: ../kontakt.php?error=3');
    exit;
}

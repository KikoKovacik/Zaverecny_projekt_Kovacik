<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Kontakt;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../kontakt.php');
    exit;
}
else{
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
        $kontakt = new Kontakt();
        $ok = $kontakt->ulozitSpravu($meno, $email, $sprava);

        if ($ok) {
            header('Location: ../thankyou.php');
            exit;
        }

        header('Location: ../kontakt.php?error=3');
        exit;
    } catch (Throwable $e) {
        $logFile = __DIR__ . '/../data/error.log';
        $logMessage = sprintf("[%s] %s in %s on line %d\n", date('Y-m-d H:i:s'), $e->getMessage(), $e->getFile(), $e->getLine());
        @file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
        http_response_code(404);
        exit;
    }
}
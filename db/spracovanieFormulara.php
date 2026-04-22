<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../classes/Kontakt.php';

use formular\Kontakt;

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
    $kontakt = new Kontakt();
    $ok = $kontakt->ulozitSpravu($meno, $email, $sprava);

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

<?php

declare(strict_types=1);

use App\Auth;
use App\Database;
use App\GaleriaManager;

require_once __DIR__ . '/../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../admin_galeria.php');
    exit;
}

try {
    $database = new Database();
    $auth = new Auth($database);
    $auth->requireAdmin();

    $id = (int) ($_POST['id'] ?? 0);
    $popis = trim($_POST['popis'] ?? '');

    if ($id > 0) {
        $galeriaManager = new GaleriaManager($database);
        $galeriaManager->updateDescription($id, $popis !== '' ? $popis : null);
        header('Location: ../admin_galeria.php?success=2');
        exit;
    }

    header('Location: ../admin_galeria.php?error=3');
} catch (Throwable $e) {
    header('Location: ../admin_galeria.php?error=3');
}

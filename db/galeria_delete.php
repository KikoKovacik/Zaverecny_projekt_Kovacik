<?php

declare(strict_types=1);

use App\Auth;
use App\Database;
use App\GaleriaManager;

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $database = new Database();
    $auth = new Auth($database);
    $auth->requireAdmin();

    $id = (int) ($_GET['id'] ?? 0);

    if ($id > 0) {
        $galeriaManager = new GaleriaManager($database);
        if ($galeriaManager->deleteImage($id)) {
            header('Location: ../admin_galeria.php?success=3');
            exit;
        }
    }

    header('Location: ../admin_galeria.php?error=3');
} catch (Throwable $e) {
    header('Location: ../admin_galeria.php?error=3');
}

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

    if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        header('Location: ../admin_galeria.php?error=1');
        exit;
    }

    $file = $_FILES['image'];
    $allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    $maxSize = 5 * 1024 * 1024; // 5 MB

    if (!in_array($file['type'], $allowedTypes) || $file['size'] > $maxSize) {
        header('Location: ../admin_galeria.php?error=2');
        exit;
    }

    // Bezpecny nazov suboru
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $newFileName = uniqid('img_', true) . '.' . $extension;
    $uploadDir = __DIR__ . '/../img/galeria/';
    $destination = $uploadDir . $newFileName;
    $relativePath = 'img/galeria/' . $newFileName;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        $galeriaManager = new GaleriaManager($database);
        $description = trim($_POST['description'] ?? '');
        $description = $description !== '' ? $description : null;

        if ($galeriaManager->addImage($relativePath, $description)) {
            header('Location: ../admin_galeria.php?success=1');
            exit;
        }
    }

    header('Location: ../admin_galeria.php?error=1');
} catch (Throwable $e) {
    header('Location: ../admin_galeria.php?error=3');
}

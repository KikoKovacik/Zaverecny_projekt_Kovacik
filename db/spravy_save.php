<?php

declare(strict_types=1);

use App\Auth;
use App\Database;
use App\SpravaManager;

require_once __DIR__ . '/../vendor/autoload.php';

$auth = new Auth(new Database());
$auth->requireAdmin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../admin_spravy.php');
    exit;
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) ?: 0;
$poznamka = trim($_POST['poznamka'] ?? '');

if ($id <= 0) {
    header('Location: ../admin_spravy.php?error=1');
    exit;
}

$manager = new SpravaManager(new Database());
$manager->updateNote($id, $poznamka === '' ? null : $poznamka);

header('Location: ../admin_spravy.php?success=1');
exit;

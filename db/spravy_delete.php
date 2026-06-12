<?php

declare(strict_types=1);

use App\Auth;
use App\Database;
use App\SpravaManager;

require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/Auth.php';
require_once __DIR__ . '/../classes/SpravaManager.php';

$auth = new Auth(new Database());
$auth->requireAdmin();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?: 0;

if ($id <= 0) {
    header('Location: ../admin_spravy.php?error=1');
    exit;
}

$manager = new SpravaManager(new Database());
$manager->deleteMessage($id);

header('Location: ../admin_spravy.php?success=2');
exit;

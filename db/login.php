<?php

declare(strict_types=1);

use App\Auth;
use App\Database;

require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/Auth.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../login.php');
    exit;
}

$username = trim($_POST['username'] ?? '');
$password = (string) ($_POST['password'] ?? '');

if ($username === '' || $password === '') {
    header('Location: ../login.php?error=1');
    exit;
}

try {
    $auth = new Auth(new Database());

    if ($auth->login($username, $password)) {
        header('Location: ../admin_spravy.php');
        exit;
    }

    header('Location: ../login.php?error=1');
    exit;
} catch (Throwable $e) {
    header('Location: ../login.php?error=1');
    exit;
}

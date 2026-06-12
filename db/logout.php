<?php

declare(strict_types=1);

use App\Auth;
use App\Database;

require_once __DIR__ . '/../vendor/autoload.php';

$auth = new Auth(new Database());
$auth->logout();

header('Location: ../index.php');
exit;

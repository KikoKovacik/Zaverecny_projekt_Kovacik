<?php

declare(strict_types=1);

namespace App;

use PDO;

class Auth
{
    private Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->ensureSession();
    }

    public function login(string $username, string $password): bool
    {
        $stmt = $this->database->pdo()->prepare('SELECT id, username, password FROM users WHERE username = :username LIMIT 1');
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user || !password_verify($password, (string) $user['password'])) {
            return false;
        }

        $_SESSION['user_id'] = (int) $user['id'];
        $_SESSION['username'] = (string) $user['username'];
        $_SESSION['role'] = 'admin';

        return true;
    }

    public function logout(): void
    {
        $this->ensureSession();
        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }

        session_destroy();
    }

    public function isAdmin(): bool
    {
        $this->ensureSession();

        return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
    }

    public function requireAdmin(): void
    {
        if (!$this->isAdmin()) {
            header('Location: /Zaverecny_projekt_Kovacik/login.php');
            exit;
        }
    }

    private function ensureSession(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
}
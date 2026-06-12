<?php

$errorCode = $_GET['error'] ?? '';
$errorMessage = '';

if ($errorCode === '1') {
    $errorMessage = 'Nesprávne prihlasovacie údaje.';
}

require_once __DIR__ . '/templates/header.php';
?>

<div class="kontakt_telo">
    <div class="nadpis">
        <h1>Prihlásenie admina</h1>
    </div>

    <?php if ($errorMessage !== ''): ?>
        <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8'); ?></div>
    <?php endif; ?>

    <div class="kontakt_formular">
        <form class="formular" method="post" action="db/login.php">
            <label for="username">Používateľské meno</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Heslo</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="tlacitko">Prihlásiť sa</button>
        </form>
    </div>
</div>

<?php require_once __DIR__ . '/templates/footer.php';

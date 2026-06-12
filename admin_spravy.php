<?php

declare(strict_types=1);

use App\Auth;
use App\Database;
use App\SpravaManager;

require_once __DIR__ . '/vendor/autoload.php';

$database = new Database();
$auth = new Auth($database);
$auth->requireAdmin();
$spravaManager = new SpravaManager($database);

$messages = $spravaManager->getMessages();
$statusMessage = '';
$statusType = 'success';

if (isset($_GET['success']) && $_GET['success'] === '1') {
    $statusMessage = 'Poznámka bola uložená.';
}

if (isset($_GET['success']) && $_GET['success'] === '2') {
    $statusMessage = 'Správa bola vymazaná.';
}

if (isset($_GET['error']) && $_GET['error'] === '1') {
    $statusMessage = 'Nepodarilo sa uložiť zmeny.';
    $statusType = 'danger';
}

require_once __DIR__ . '/templates/header.php';
?>

<div class="kontakt_telo">
    <div class="nadpis">
        <h1>Správy administrátora</h1>
    </div>

    <?php if ($statusMessage !== ''): ?>
        <div class="alert alert-<?php echo $statusType; ?>" role="alert"><?php echo htmlspecialchars($statusMessage, ENT_QUOTES, 'UTF-8'); ?></div>
    <?php endif; ?>

    <div class="kontakt_formular" style="width: 95%;">
        <div class="table-responsive w-100">
            <table class="tabulka">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Meno</th>
                        <th>Email</th>
                        <th>Správa</th>
                        <th>Čas</th>
                        <th>Poznámka</th>
                        <th>Akcie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($messages)): ?>
                        <tr>
                            <td colspan="7">Zatiaľ nie sú žiadne správy.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($messages as $message): ?>
                            <tr>
                                <td><?php echo (int) $message['id']; ?></td>
                                <td><?php echo htmlspecialchars((string) $message['meno'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars((string) $message['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars((string) $message['sprava'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars((string) $message['cas'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td>
                                    <form method="post" action="db/spravy_save.php">
                                        <input type="hidden" name="id" value="<?php echo (int) $message['id']; ?>">
                                        <textarea name="poznamka" rows="4" style="width: 100%; margin-bottom: 10px;"><?php echo htmlspecialchars((string) ($message['poznamka'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></textarea>
                                        <button type="submit" class="tlacitko" style="width: 100%; margin-bottom: 0;">Uložiť poznámku</button>
                                    </form>
                                </td>
                                <td>
                                    <a class="tlacitko" style="display: inline-block; width: 100%; text-align: center; text-decoration: none;" href="db/spravy_delete.php?id=<?php echo (int) $message['id']; ?>" onclick="return confirm('Naozaj chcete vymazať túto správu?');">Vymazať</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/templates/footer.php';

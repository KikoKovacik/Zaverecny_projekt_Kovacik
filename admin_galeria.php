<?php

use App\Auth;
use App\Database;
use App\GaleriaManager;

require_once __DIR__ . '/vendor/autoload.php';

$database = new Database();
$auth = new Auth($database);
$auth->requireAdmin();
$galeriaManager = new GaleriaManager($database);

$images = $galeriaManager->getImages();
$statusMessage = '';
$statusType = 'success';

if (isset($_GET['success'])) {
    if ($_GET['success'] === '1') $statusMessage = 'Obrázok bol úspešne nahratý.';
    elseif ($_GET['success'] === '2') $statusMessage = 'Popis bol upravený.';
    elseif ($_GET['success'] === '3') $statusMessage = 'Obrázok bol vymazaný.';
}

if (isset($_GET['error'])) {
    if ($_GET['error'] === '1') $statusMessage = 'Pri nahrávaní obrázka nastala chyba.';
    elseif ($_GET['error'] === '2') $statusMessage = 'Nepovolený formát alebo príliš veľký súbor.';
    elseif ($_GET['error'] === '3') $statusMessage = 'Akcia sa nepodarila.';
    $statusType = 'danger';
}

require_once __DIR__ . '/templates/header.php';
?>

<div class="kontakt_telo">
    <div class="nadpis">
        <h1>Administrácia galérie</h1>
    </div>

    <?php if ($statusMessage !== ''): ?>
        <div class="alert alert-<?php echo $statusType; ?>" role="alert" style="width: 95%; margin: 0 auto 20px; max-width: 1000px;">
            <?php echo htmlspecialchars($statusMessage, ENT_QUOTES, 'UTF-8'); ?>
        </div>
    <?php endif; ?>

    <!-- Formulár na pridanie novej fotky -->
    <div class="kontakt_formular" style="width: 95%; max-width: 1000px; margin: 0 auto 40px; padding: 20px; background: rgba(0, 0, 0, 0.5); border-radius: 10px;">
        <h3 style="color: white; margin-bottom: 20px;">Nahrať nový obrázok</h3>
        <form action="db/galeria_upload.php" method="post" enctype="multipart/form-data">
            <div style="margin-bottom: 15px;">
                <label for="image" style="color: white; display: block; margin-bottom: 5px;">Vyberte obrázok (JPG, PNG, WEBP, max 5MB):</label>
                <input type="file" name="image" id="image" accept="image/*" required style="width: 100%; color: white;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="description" style="color: white; display: block; margin-bottom: 5px;">Popis obrázka (nepovinné):</label>
                <input type="text" name="description" id="description" class="kontakt_udaj" style="width: 100%; padding: 10px;">
            </div>
            <div style="text-align: center; margin-top: 25px;">
                <button type="submit" class="tlacitko" style="width: 200px; display: inline-block;">Nahrať obrázok</button>
            </div>
        </form>
    </div>

    <!-- Výpis nahraných fotiek -->
    <div class="kontakt_formular" style="width: 95%; max-width: 1000px; margin: 0 auto;">
        <h3 style="color: white; margin-bottom: 20px;">Spravovanie existujúcich obrázkov</h3>
        <div class="table-responsive w-100">
            <table class="tabulka">
                <thead>
                    <tr>
                        <th>Náhľad</th>
                        <th>Popis</th>
                        <th>Dátum pridania</th>
                        <th>Akcie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($images)): ?>
                        <tr>
                            <td colspan="4">V galérii zatiaľ nie sú žiadne obrázky.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($images as $img): ?>
                            <tr>
                                <td style="width: 150px;">
                                    <img src="<?php echo htmlspecialchars((string) $img['cesta_k_suboru'], ENT_QUOTES, 'UTF-8'); ?>" alt="Náhľad" style="max-width: 120px; border-radius: 5px;">
                                </td>
                                <td style="min-width: 250px;">
                                    <form method="post" action="db/galeria_edit.php" style="display: block;">
                                        <input type="hidden" name="id" value="<?php echo (int) $img['id']; ?>">
                                        <input type="text" name="popis" class="kontakt_udaj" value="<?php echo htmlspecialchars((string) ($img['popis'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>" placeholder="Zadajte popis" style="width: 100%; box-sizing: border-box; margin-bottom: 10px; padding: 8px;">
                                        <div style="text-align: center;">
                                            <button type="submit" class="tlacitko" style="margin: 0; padding: 8px 15px; width: 200px;">Uložiť popis</button>
                                        </div>
                                    </form>
                                </td>
                                <td><?php echo htmlspecialchars((string) $img['cas_pridania'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td>
                                    <a class="tlacitko" style="display: inline-block; width: 100%; text-align: center; text-decoration: none; padding: 5px 10px; background-color: #dc3545;" href="db/galeria_delete.php?id=<?php echo (int) $img['id']; ?>" onclick="return confirm('Naozaj chcete vymazať tento obrázok?');">Vymazať</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>

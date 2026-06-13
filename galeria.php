<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Database;
use App\GaleriaManager;

$database = new Database();
$galeriaManager = new GaleriaManager($database);
$images = $galeriaManager->getImages();

require_once __DIR__ . '/templates/header.php'; 
?>

<!--TELO GALÉRIE-->
<div class="galeria_telo">
    <div class="nadpis">
        <h1>Galéria</h1>
    </div>

    <?php if (empty($images)): ?>
        <p style="text-align: center; color: white;">V galérii momentálne nie sú žiadne obrázky.</p>
    <?php else: ?>
        <div class="galeria_rad" style="flex-wrap: wrap;">
            <?php foreach ($images as $img): ?>
                <div class="galeria_karta" style="margin-bottom: 20px;">
                    <img src="<?php echo htmlspecialchars((string) $img['cesta_k_suboru'], ENT_QUOTES, 'UTF-8'); ?>" 
                         alt="<?php echo htmlspecialchars((string) ($img['popis'] ?? 'Obrázok z galérie'), ENT_QUOTES, 'UTF-8'); ?>">
                    <?php if (!empty($img['popis'])): ?>
                        <h4><?php echo htmlspecialchars((string) $img['popis'], ENT_QUOTES, 'UTF-8'); ?></h4>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>


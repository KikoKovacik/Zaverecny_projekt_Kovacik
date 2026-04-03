<?php
$chybaOdoslania = '';
$meno = '';
$email = '';
$sprava = '';
$suhlas = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meno = trim($_POST['meno'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $sprava = trim($_POST['sprava'] ?? '');
    $suhlas = isset($_POST['suhlas']);

    if ($meno === '' || $email === '' || $sprava === '' || !$suhlas) {
        $chybaOdoslania = 'Prosim, vyplnte vsetky polia a potvrďte suhlas.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $chybaOdoslania = 'Prosim, zadajte platnu emailovu adresu.';
    } else {
        header('Location: thankyou.php');
        exit;
    }
}
?>

<?php require_once __DIR__ . '/templates/header.php'; ?>

<!--TELO KONTAKTU-->
        <div class="kontakt_telo">
            <div class="nadpis">
                <h1>Kontakt</h1>
            </div>
            <?php if ($chybaOdoslania !== ''): ?>
                <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($chybaOdoslania, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>
            <!--LABELY, INPUTY A TLAČIDLO VO FORMULÁRI-->
            <div class="kontakt_formular">
                <form class="formular" id="kontaktForm" method="post" action="kontakt.php">
                    <label for="meno">Meno</label>
                    <input type="text" id="meno" name="meno" value="<?php echo htmlspecialchars($meno, ENT_QUOTES, 'UTF-8'); ?>" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" required>
                    
                    <label for="sprava">Správa</label>
                    <textarea id="sprava" name="sprava" rows="5" placeholder="Svoju správu môžete zanechať tu" required><?php echo htmlspecialchars($sprava, ENT_QUOTES, 'UTF-8'); ?></textarea>

                    <div class="suhlas">
                        <input type="checkbox" id="suhlas" name="suhlas" value="1" <?php echo $suhlas ? 'checked' : ''; ?> required>
                        <label for="suhlas">Súhlasím so spracovaním osobných údajov</label>
                    </div>

                    <button type="submit" class="tlacitko">Odoslať</button>
                </form>
            </div>
        </div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>


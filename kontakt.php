<?php require_once __DIR__ . '/templates/header.php'; ?>

<!--TELO KONTAKTU-->
        <div class="kontakt_telo">
            <div class="nadpis">
                <h1>Kontakt</h1>
            </div>
            <!--LABELY, INPUTY A TLAČIDLO VO FORMULÁRI-->
            <div class="kontakt_formular">
                <form class="formular" id="kontaktForm">
                    <label for="meno">Meno</label>
                    <input type="text" id="meno" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                    
                    <label for="sprava">Správa</label>
                    <textarea id="sprava" rows="5" placeholder="Svoju správu môžete zanechať ťu" required></textarea>

                    <div class="suhlas">
                        <input type="checkbox" id="suhlas" required>
                        <label for="suhlas">Súhlasím so spracovaním osobných údajov</label>
                    </div>

                    <button type="submit" class="tlacitko">Odoslať</button>
                </form>
            </div>
        </div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>


<?php require_once __DIR__ . '/templates/header.php'; ?>

<!--TELO KONTAKTU-->
        <div class="kontakt_telo">
            <div class="nadpis">
                <h1>Kontakt</h1>
            </div>
            <!--LABELY, INPUTY A TLAČIDLO VO FORMULÁRI-->
            <div class="kontakt_formular">
                <form class="formular" id="kontaktForm" method="post" action="kontakt.php">
                    <label for="meno">Meno</label>
                    <input type="text" id="meno" name="meno" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="sprava">Správa</label>
                    <textarea id="sprava" name="sprava" rows="5" placeholder="Svoju správu môžete zanechať tu" required></textarea>

                    <div class="suhlas">
                        <input type="checkbox" id="suhlas" name="suhlas" value="1" required>
                        <label for="suhlas">Súhlasím so spracovaním osobných údajov</label>
                    </div>

                    <button type="submit" class="tlacitko">Odoslať</button>
                </form>
            </div>
        </div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>


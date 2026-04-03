<!DOCTYPE html>
<html lang="sk">
    <!--NÁZOV, LINKY A META VŠADE ROVNAKÉ-->
    <head>
        <meta charset="UTF-8" />
        <title>TJ Slovan Zbehy</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Stránka o futbalovom tíme zo Zbehov">
        <meta name="keywords" content="Zbehy, futbal, dedina, tim, TJ, Slovan">
        <meta name="author" content="Krištof Kováčik">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <!--NAVIGÁCIA VŠADE ROVNAKÁ-->
        <header class="navigacia">
            <div class="navigacia_vsetko">
                <div class="navigacia_vlavo">
                    <img src="img/Zbehy_znak.png" alt="Znak TJ Slovan Zbehy">
                    <a href="index.php">TJ Slovan Zbehy</a>
                </div>

                <input type="checkbox" id="navigacia_tlacitko"/>
                <label for="navigacia_tlacitko" class="hamburger">☰</label>

                <nav class="tlacitka">
                    <a href="index.php" class="navigacia_ahref">Domov</a>
                    <a href="blog.php" class="navigacia_ahref">Blog</a>
                    <a href="listky.php" class="navigacia_ahref">Lístky</a>
                    <a href="galeria.php" class="navigacia_ahref">Galéria</a>
                    <a href="kontakt.php" class="navigacia_ahref">Kontakt</a>
                </nav>
            </div>
        </header>

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

        <!--FOOTER VŠADE ROVNAKÝ-->
        <footer>
            <div class="footer_vsetko">
                <div class="footer_hore">
                    <p>Hlavný sponzor</p>
                    <div class="footer_preklik">
                        <a href="https://www.stravovanieulisku.sk/">Stravovanie u Líšku</a>
                    </div>
                </div>
                <div class="footer_stred">
                    <div class="footer_vlavo">
                        <img src="img/Zbehy_znak.png" alt="Znak TJ Slovan Zbehy">
                        <p>TJ Slovan Zbehy</p>
                    </div>
                    <div class="footer_vpravo">
                        <a href="index.php" class="footer_ahref">Domov</a>
                        <a href="blog.php" class="footer_ahref">Blog</a>
                        <a href="listky.php" class="footer_ahref">Lístky</a>
                        <a href="galeria.php" class="footer_ahref">Galéria</a>
                        <a href="kontakt.php" class="footer_ahref">Kontakt</a>
                    </div>
                </div>
                <div class="footer_dole">
                    <p>© oficiálna stránka futbalového klubu TJ Slovan Zbehy</p>
                    <p>Všetky práva vyhradené.</p>
                    <p>2012 – 2025</p>
                    <div class="footer_cislo_mail">
                        <a href="">0912 345 678</a>
                        <a href="">tjzbehy@sfz.com</a>
                    </div>
                </div>
            </div>
        </footer>
            
        <!--COOKIES A SCRIPTY VŠADE ROVNAKÉ-->
        <!--KREATÍVNY BOD-->
        <div id="cookieConsent">
            Táto stránka používa cookies.
            <button id="acceptCookies">Rozumiem</button>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
                
        <script 
            src="js/script.js">
        </script>
    </body>
</html>

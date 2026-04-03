<!DOCTYPE html>
<html lang="sk">
    <!--NĂZOV, LINKY A META VĹ ADE ROVNAKĂ‰-->
    <head>
        <meta charset="UTF-8" />
        <title>TJ Slovan Zbehy</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="StrĂˇnka o futbalovom tĂ­me zo Zbehov">
        <meta name="keywords" content="Zbehy, futbal, dedina, tim, TJ, Slovan">
        <meta name="author" content="KriĹˇtof KovĂˇÄŤik">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <!--NAVIGĂCIA VĹ ADE ROVNAKĂ-->
        <header class="navigacia">
            <div class="navigacia_vsetko">
                <div class="navigacia_vlavo">
                    <img src="img/Zbehy_znak.png" alt="Znak TJ Slovan Zbehy">
                    <a href="index.php">TJ Slovan Zbehy</a>
                </div>

                <input type="checkbox" id="navigacia_tlacitko"/>
                <label for="navigacia_tlacitko" class="hamburger">â°</label>

                <nav class="tlacitka">
                    <a href="index.php" class="navigacia_ahref">Domov</a>
                    <a href="blog.php" class="navigacia_ahref">Blog</a>
                    <a href="listky.php" class="navigacia_ahref">LĂ­stky</a>
                    <a href="galeria.php" class="navigacia_ahref">GalĂ©ria</a>
                    <a href="kontakt.php" class="navigacia_ahref">Kontakt</a>
                </nav>
            </div>
        </header>

        <!--TELO INDEXU-->
        <div class="index_telo">
            <!--NADPIS A PARAGRAFY-->
            <div class="index_obsah">
                <h1>Vitajte na oficiĂˇlnej strĂˇnke TJ Slovan Zbehy!</h1>
                <p>TJ Slovan Zbehy je dlhoroÄŤnĂ˝m ĂşÄŤastnĂ­kom VI. ligy Stred
                    ZĂˇpadoslovenskĂ©ho futbalovĂ©ho zvĂ¤zu, pĂ´sobiaci v dedine s 2200 obyvateÄľmi,
                     ktorĂˇ je vzdialenĂˇ pribliĹľne 10km od mesta Nitra.
                </p>
                 <p>NĂˇĹˇ tĂ­m skonÄŤil v minulej sezĂłne 2024/2025 na celkovom 9. mieste zo
                     16 ĂşÄŤastnĂ­kov. Po odohratĂ­ jesennej ÄŤasti zimujeme na priebeĹľnom
                     4. mieste a mienime pokraÄŤovaĹĄ v nastolenom trende zlepĹˇovaĹĄ sa.
                </p>
                 <p>NaĹˇĂ­m hlavnĂ˝m sponzorom je uĹľ niekoÄľko rokov spoloÄŤnosĹĄ Stravovanie
                      u LĂ­Ĺˇku, ktorĂ˝ch strĂˇnku mĂ´Ĺľete navĹˇtĂ­viĹĄ niĹľĹˇie.
                </p>
            </div>
        </div>

        <!--FOOTER VĹ ADE ROVNAKĂť-->
        <footer>
            <div class="footer_vsetko">
                <div class="footer_hore">
                    <p>HlavnĂ˝ sponzor</p>
                    <div class="footer_preklik">
                        <a href="https://www.stravovanieulisku.sk/">Stravovanie u LĂ­Ĺˇku</a>
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
                        <a href="listky.php" class="footer_ahref">LĂ­stky</a>
                        <a href="galeria.php" class="footer_ahref">GalĂ©ria</a>
                        <a href="kontakt.php" class="footer_ahref">Kontakt</a>
                    </div>
                </div>
                <div class="footer_dole">
                    <p>Â© oficiĂˇlna strĂˇnka futbalovĂ©ho klubu TJ Slovan Zbehy</p>
                    <p>VĹˇetky prĂˇva vyhradenĂ©.</p>
                    <p>2012 â€“ 2025</p>
                    <div class="footer_cislo_mail">
                        <a href="">0912 345 678</a>
                        <a href="">tjzbehy@sfz.com</a>
                    </div>
                </div>
            </div>
        </footer>
            
        <!--COOKIES A SCRIPTY VĹ ADE ROVNAKĂ‰-->
        <!--KREATĂŤVNY BOD-->
        <div id="cookieConsent">
            TĂˇto strĂˇnka pouĹľĂ­va cookies.
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

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
                    <a href="index.html">TJ Slovan Zbehy</a>
                </div>

                <input type="checkbox" id="navigacia_tlacitko"/>
                <label for="navigacia_tlacitko" class="hamburger">☰</label>

                <nav class="tlacitka">
                    <a href="index.html" class="navigacia_ahref">Domov</a>
                    <a href="blog.html" class="navigacia_ahref">Blog</a>
                    <a href="listky.html" class="navigacia_ahref">Lístky</a>
                    <a href="galeria.html" class="navigacia_ahref">Galéria</a>
                    <a href="kontakt.html" class="navigacia_ahref">Kontakt</a>
                </nav>
            </div>
        </header>

        <!--TELO INDEXU-->
        <div class="index_telo">
            <!--NADPIS A PARAGRAFY-->
            <div class="index_obsah">
                <h1>Vitajte na oficiálnej stránke TJ Slovan Zbehy!</h1>
                <p>TJ Slovan Zbehy je dlhoročným účastníkom VI. ligy Stred
                    Západoslovenského futbalového zväzu, pôsobiaci v dedine s 2200 obyvateľmi,
                     ktorá je vzdialená približne 10km od mesta Nitra.
                </p>
                 <p>Náš tím skončil v minulej sezóne 2024/2025 na celkovom 9. mieste zo
                     16 účastníkov. Po odohratí jesennej časti zimujeme na priebežnom
                     4. mieste a mienime pokračovať v nastolenom trende zlepšovať sa.
                </p>
                 <p>Naším hlavným sponzorom je už niekoľko rokov spoločnosť Stravovanie
                      u Líšku, ktorých stránku môžete navštíviť nižšie.
                </p>
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
                        <a href="index.html" class="footer_ahref">Domov</a>
                        <a href="blog.html" class="footer_ahref">Blog</a>
                        <a href="listky.html" class="footer_ahref">Lístky</a>
                        <a href="galeria.html" class="footer_ahref">Galéria</a>
                        <a href="kontakt.html" class="footer_ahref">Kontakt</a>
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
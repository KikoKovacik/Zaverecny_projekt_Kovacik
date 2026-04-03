<?php require_once __DIR__ . '/templates/header.php'; ?>

<!--TELO LÍSTKOV-->
        <div class="listky_telo">
            <div class="nadpis">
                <h1>Lístky</h1>
            </div>
            <!--ZOZNAM-->
            <div class="listky_zoznam">
                <h2>Náš klub aktuálne zastrešuje kategórie:</h2>
                <ul class="zoznam">
                    <li>Dospelí („A-mužstvo“)</li>
                    <li>Starší dorast („U-19“)</li>
                    <li>Starší žiaci („U-15“)</li>
                    <li>Mladší žiaci („U-13“)</li>
                    <li>Prípravka („U-11“)</li>
                </ul>
            </div>
            <!--TABUĽKA-->
            <div class="listky_tabulka">
                <h2>Vstupné</h2>
                <table class="tabulka">
                    <tr>
                        <th>Kategória</th>
                        <th>Divák</th>
                        <th>Cena</th>
                    </tr>
                    <tr>
                        <td rowspan="3">dospelí</td>
                        <td>muži</td>
                        <td>2€</td>
                    </tr>
                    <tr>
                        <td>seniori</td>
                        <td>1€</td>
                    </tr>
                    <tr>
                        <td>ženy a deti</td>
                        <td>zadarmo</td>
                    </tr>
                    <tr>
                        <td>mládež</td>
                        <td>všetci</td>
                        <td>zadarmo</td>
                    </tr>
                </table>
            </div>
            <!--SPODNÝ TEXT-->
            <div class="listky_text">
                <h3>Lístky nepredávame vopred online, ale iba na mieste.</h3>
                <p>Nebojte sa využiť zadarmo parkovanie pri ihrisku.</p>
                <p>Rovnako sa nebojte navštíviť našu krčmu, kde čapujeme dobré alko aj nealko.</p>
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


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

        <!--TELO BLOGU-->
        <div class="blog_telo">
            <!--NADPIS A ĂšVODNĂ‰ FOTKY-->
            <div class="nadpis">
                <h1>Blog</h1>
            </div>
            <div class="blog_fotky">
                <div class="blog_karta">
                    <img src="img/Zbehy_tim.jpg" alt="Fotka tĂ­mu">
                    <h4>NĂˇĹˇ tĂ­m na VianoÄŤnom turnaji</h4>
                </div>
                <div class="blog_karta">
                    <img src="img/Zbehy_tabulka.png" alt="TabuÄľka VI. ligy">
                    <h4>TabuÄľka VI. ligy Stred</h4>
                </div>
            </div>

            <!--BOOTSTRAP KARUSEL-->
            <div class="blog_karusel">
                <h2>PrehÄľad poslednĂ˝ch 5 zĂˇpasov</h2>
                <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Zbehy_13.jpg" class="d-block w-100" alt="13.kolo">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Zbehy_12.jpg" class="d-block w-100" alt="12.kolo">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Zbehy_11.jpg" class="d-block w-100" alt="11.kolo">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Zbehy_10.jpg" class="d-block w-100" alt="10.kolo">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Zbehy_9.jpg" class="d-block w-100" alt="9.kolo">
                    </div>
               </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!--BOOTSTRAP AKORDEĂ“N-->
            <div class="blog_akordeon">
                <h2>Vyjadrenia po poslednom zĂˇpase</h2>
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                Vyjadrenie trĂ©nera Romana Zentka
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Ako ste spokojnĂ˝ s dneĹˇnĂ˝m zĂˇpasom?</strong><br>
                                â€žDneĹˇnĂ© vĂ­ĹĄazstvo v poslednom majstrovskom stretnutĂ­ v roku 2025 proti
                                mimoriadne kvalitnĂ©mu sĂşperovi bola odmena za naĹˇu zodpovednĂş prĂ­pravu.
                                Som veÄľmi spokojnĂ˝ s opatrnou a spoÄľahlivou obranou, kreatĂ­vnym stredom
                                ihriska aj s ĂştoÄŤnĂ­kmi, ktorĂ­ sa neboja strieÄľaĹĄ.â€ś<br>
                                <strong>ÄŚo bude po konci jesennej ÄŤasti nasledovaĹĄ?</strong><br>
                                â€žPrechĂˇdzame na trĂ©ningy v hale, kde sa budeme pripravovaĹĄ na VianoÄŤnĂ˝ turnaj. 
                                VeÄľkĂ˝ futbal a hala sĂş dosĹĄ odliĹˇnĂ©, napriek tomu verĂ­m, Ĺľe predvedieme 
                                kvalitnĂş hru aj tam. Chlapci majĂş motivĂˇciu podĂˇvaĹĄ eĹˇte lepĹˇie vĂ˝kony, aby sa 
                                prebojovali do menĹˇej zĂˇkladnej zostavy.â€ś
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Vyjadrenie kapitĂˇna Ĺ imona Ĺ ĂłĹˇa
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>HodnotĂ­Ĺˇ zĂˇpas pozitĂ­vne?</strong><br>
                                â€žVeÄľmi pozitĂ­vne. Na celkom dobrom ihrisku pri chladnom poÄŤasĂ­ sme sa 
                                snaĹľili hraĹĄ naĹˇu kombinaÄŤnĂş hru. Ja v strede ihriska som sa snaĹľil hru
                                ukÄľudĹovaĹĄ, keÄŹĹľe hrĂˇme radĹˇej futbal bez rĂ˝chlych brejkov. Dali sme dva
                                gĂłly, aj keÄŹ ich mohlo byĹĄ viac. SĂşpera sme drĹľali od ĹˇancĂ­ a myslĂ­m, 
                                Ĺľe dnes sme zaslĂşĹľene vyhrali.â€ś<br>
                                <strong>NĂˇjdu sa aj negatĂ­vne aspekty?</strong><br>
                                â€žMusĂ­m pripomenĂşĹĄ, Ĺľe sme celkom zbytoÄŤne dostali pĂˇr ĹľltĂ˝ch kariet.
                                VeÄľakrĂˇt si vysvetÄľujeme, aby sme v preruĹˇeniach nestratili hlavu.
                                Po poslednom zĂˇpase jesene sme si nechceli pripomĂ­naĹĄ len to zlĂ©,
                                ale padlo pĂˇr slov aj o tomto. NaĹˇu disciplĂ­nu vĹˇak aj tak hodnotĂ­m dobre.â€ś
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                Vyjadrenie strelca gĂłlu MatĂşĹˇa ZĂˇhona
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Si spokojnĂ˝ s dvomi gĂłlmi za dva zĂˇpasy?</strong><br>
                                â€žGĂłly sĂş pre mĹa iba ÄŤereĹˇniÄŤka, hlavne som rĂˇd za ĹˇesĹĄ bodov z tĂ˝chto zĂˇpasov.
                                ZĂˇroveĹ chcem vyzdvihnĂşĹĄ naĹˇich zĂˇloĹľnĂ­kov, ktorĂ­ mi naservĂ­rovali skvelĂ© prihrĂˇvky.â€ś<br>
                                <strong>OslĂˇvili ste ĹˇtvrtĂ© miesto v 14-tĂ­movej konkurencii?</strong><br>
                                â€žSamozrejme! KeÄŹĹľe trĂ©ner dĂˇval pozor, vĹˇetci sme, bohuĹľiaÄľ, odiĹˇli domov
                                po svojich. Je dobrĂ© chvĂ­Äľu oslĂˇviĹĄ a oddĂ˝chnuĹĄ si, ale uĹľ opĂ¤ĹĄ zaÄŤĂ­name trĂ©novaĹĄ
                                v telocviÄŤni. Na prvom trĂ©ningu sme sĂ­ce boli piati, ale ĂşÄŤasĹĄ sa zvyĹˇuje.â€ś
                            </div>
                        </div>
                    </div>
                </div>
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

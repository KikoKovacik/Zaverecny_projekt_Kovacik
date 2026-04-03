<?php require_once __DIR__ . '/templates/header.php'; ?>

<!--TELO BLOGU-->
        <div class="blog_telo">
            <!--NADPIS A ÚVODNÉ FOTKY-->
            <div class="nadpis">
                <h1>Blog</h1>
            </div>
            <div class="blog_fotky">
                <div class="blog_karta">
                    <img src="img/Zbehy_tim.jpg" alt="Fotka tímu">
                    <h4>Náš tím na Vianočnom turnaji</h4>
                </div>
                <div class="blog_karta">
                    <img src="img/Zbehy_tabulka.png" alt="Tabuľka VI. ligy">
                    <h4>Tabuľka VI. ligy Stred</h4>
                </div>
            </div>

            <!--BOOTSTRAP KARUSEL-->
            <div class="blog_karusel">
                <h2>Prehľad posledných 5 zápasov</h2>
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

            <!--BOOTSTRAP AKORDEÓN-->
            <div class="blog_akordeon">
                <h2>Vyjadrenia po poslednom zápase</h2>
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                Vyjadrenie trénera Romana Zentka
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Ako ste spokojný s dnešným zápasom?</strong><br>
                                „Dnešné víťazstvo v poslednom majstrovskom stretnutí v roku 2025 proti
                                mimoriadne kvalitnému súperovi bola odmena za našu zodpovednú prípravu.
                                Som veľmi spokojný s opatrnou a spoľahlivou obranou, kreatívnym stredom
                                ihriska aj s útočníkmi, ktorí sa neboja strieľať.“<br>
                                <strong>Čo bude po konci jesennej časti nasledovať?</strong><br>
                                „Prechádzame na tréningy v hale, kde sa budeme pripravovať na Vianočný turnaj. 
                                Veľký futbal a hala sú dosť odlišné, napriek tomu verím, že predvedieme 
                                kvalitnú hru aj tam. Chlapci majú motiváciu podávať ešte lepšie výkony, aby sa 
                                prebojovali do menšej základnej zostavy.“
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Vyjadrenie kapitána Šimona Šóša
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Hodnotíš zápas pozitívne?</strong><br>
                                „Veľmi pozitívne. Na celkom dobrom ihrisku pri chladnom počasí sme sa 
                                snažili hrať našu kombinačnú hru. Ja v strede ihriska som sa snažil hru
                                ukľudňovať, keďže hráme radšej futbal bez rýchlych brejkov. Dali sme dva
                                góly, aj keď ich mohlo byť viac. Súpera sme držali od šancí a myslím, 
                                že dnes sme zaslúžene vyhrali.“<br>
                                <strong>Nájdu sa aj negatívne aspekty?</strong><br>
                                „Musím pripomenúť, že sme celkom zbytočne dostali pár žltých kariet.
                                Veľakrát si vysvetľujeme, aby sme v prerušeniach nestratili hlavu.
                                Po poslednom zápase jesene sme si nechceli pripomínať len to zlé,
                                ale padlo pár slov aj o tomto. Našu disciplínu však aj tak hodnotím dobre.“
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                Vyjadrenie strelca gólu Matúša Záhona
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Si spokojný s dvomi gólmi za dva zápasy?</strong><br>
                                „Góly sú pre mňa iba čerešnička, hlavne som rád za šesť bodov z týchto zápasov.
                                Zároveň chcem vyzdvihnúť našich záložníkov, ktorí mi naservírovali skvelé prihrávky.“<br>
                                <strong>Oslávili ste štvrté miesto v 14-tímovej konkurencii?</strong><br>
                                „Samozrejme! Keďže tréner dával pozor, všetci sme, bohužiaľ, odišli domov
                                po svojich. Je dobré chvíľu osláviť a oddýchnuť si, ale už opäť začíname trénovať
                                v telocvični. Na prvom tréningu sme síce boli piati, ale účasť sa zvyšuje.“
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>


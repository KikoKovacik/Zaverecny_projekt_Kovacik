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
                <?php foreach ($pages as $url => $title): ?>
                    <a href="<?php echo $url; ?>" class="footer_ahref <?php echo ($currentPage == $url) ? 'active' : ''; ?>"><?php echo $title; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="footer_dole">
            <p>© oficiálna stránka futbalového klubu TJ Slovan Zbehy</p>
            <p>Všetky práva vyhradené.</p>
            <p>2012 – <?php echo date('Y'); ?></p>
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

<script src="js/script.js"></script>
</body>
</html>

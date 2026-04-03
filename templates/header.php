<!DOCTYPE html>
<html lang="sk">
    <!--NÁZOV, LINKY A META VŠADE ROVNAKÉ-->
    <head>
        <meta charset="UTF-8" />
        <title>TJ Slovan Zbehy</title>
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
        <link rel="stylesheet" href="css/style.css">
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

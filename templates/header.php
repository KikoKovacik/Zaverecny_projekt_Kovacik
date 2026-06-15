<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$isAdmin = isset($_SESSION['user_id']);
$currentPage = basename($_SERVER['SCRIPT_NAME']);

$pages = [
    'index.php' => 'Domov',
    'blog.php' => 'Blog',
    'listky.php' => 'Lístky',
    'galeria.php' => 'Galéria',
    'kontakt.php' => 'Kontakt'
];
?>
<!DOCTYPE html>
<html lang="sk">
    <!--NÁZOV, LINKY A META VŠADE ROVNAKÉ-->
    <head>
        <meta charset="UTF-8" />
        <title>TJ Slovan Zbehy<?php echo isset($pages[$currentPage]) ? ' | ' . $pages[$currentPage] : ''; ?></title>
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
        <link rel="stylesheet" href="css/style.css?v=2">
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
                    <?php foreach ($pages as $url => $title): ?>
                        <a href="<?php echo $url; ?>" class="navigacia_ahref <?php echo ($currentPage == $url) ? 'active' : ''; ?>"><?php echo $title; ?></a>
                    <?php endforeach; ?>
                    <?php if ($isAdmin): ?>
                        <a href="admin_spravy.php" class="navigacia_ahref <?php echo ($currentPage == 'admin_spravy.php') ? 'active' : ''; ?>">Administrácia správ</a>
                        <a href="admin_galeria.php" class="navigacia_ahref <?php echo ($currentPage == 'admin_galeria.php') ? 'active' : ''; ?>">Administrácia galérie</a>
                        <a href="db/logout.php" class="navigacia_ahref">Odhlásiť sa</a>
                    <?php else: ?>
                        <a href="login.php" class="navigacia_ahref <?php echo ($currentPage == 'login.php') ? 'active' : ''; ?>">Prihlásenie administrátora</a>
                    <?php endif; ?>
                </nav>
            </div>
        </header>

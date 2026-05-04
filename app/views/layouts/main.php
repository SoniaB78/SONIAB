<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Sonia B - Web Integrator & Developer' ?></title>

    <meta name="description" content="<?= $metaDescription ?? 'Sonia Bougamha, développeuse web, vous avez un projet de site, je peux peut-être vous aider x)' ?>">

    <meta name="author" content="Sonia Bougamha">

    <!-- Open Graph (SEO + réseaux sociaux) -->
    <meta property="og:title" content="<?= $title ?? '' ?>">
    <meta property="og:description" content="<?= $metaDescription ?? '' ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $currentUrl ?? '' ?>">
    <meta property="og:image" content="<?= $ogImage ?? '/assets/img/default.jpg' ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicon -->
    <link rel="icon" href="/assets/img/favicon.ico">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Icons (Bootstrap Icons recommandé) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>
<body>

<a href="#main-content" class="skip-link">Aller au contenu</a>

<header class="headercontainer d-flex justify-content-between align-items-center" role="banner">
    <img src="../public/assets/img/SB-blue.png" alt="" class="logo">

    <nav aria-label="Navigation principale">
        <a href="#tarifs">Tarifs</a>
        <a href="#parcours">Parcours</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="theme-switcher" role="group" aria-label="Choix de la couleur principale">
        <button class="color-btn" data-theme="blue" style="background:#40adb7" aria-label="Choisir la couleur bleu"></button>
        <button class="color-btn" data-theme="green" style="background:#c4f454" aria-label="Choisir la couleur vert"></button>
        <button class="color-btn" data-theme="purple" style="background:#7651c5" aria-label="Choisir la couleur violet"></button>
        <button class="color-btn" data-theme="pink" style="background:#fa167d" aria-label="Choisir la couleur rose"></button>
    </div>

    <button id="themeToggle"
        class="btn btn-light"
        aria-label="Changer le thème"
        aria-pressed="false">
    🌙
    </button>
</header>

<main id="main-content" role="main">
    <?= $content ?>
</main>
 
<footer>
    <p>© Sonia B. 2026</p>
    <nav aria-label="Navigation secondaire">
        <a href="#CGU">CGU</a>
        <a href="#LinkedIn">LinkedIn</a>
        <a href="#Github">Github</a>
    </nav>
</footer>

<script src="../public/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
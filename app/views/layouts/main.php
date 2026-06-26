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
        <img src="../public/assets/img/SB-blue.png" alt="" id="siteLogo">

        <nav aria-label="Navigation principale">
            <a href="#tarifs">Tarifs</a>
            <a href="#parcours">Parcours</a>
            <a href="#contact">Contact</a>
        </nav>

    <div class="theme-controls">
        <!-- DARK MODE -->
        <button
            id="themeToggle"
            class="btn-moon"
            aria-label="Changer le thème"
            aria-pressed="false">
            <i class="bi bi-moon-fill"></i>
        </button>

        <!-- THEME PICKER -->
        <div class="theme-picker">

            <!-- Couleur actuelle -->
            <button
                id="themePickerToggle"
                class="color-current"
                aria-label="Choisir une couleur de thème"
                aria-expanded="false">
                <i class="bi bi-droplet-fill"></i>
            </button>

            <!-- Couleurs disponibles -->
            <div class="theme-options">
                <button
                    class="color-btn"
                    data-theme="blue"
                    data-color="#40adb7"
                    aria-label="Choisir la couleur bleue">
                </button>

                <button
                    class="color-btn"
                    data-theme="green"
                    data-color="#c4f454"
                    aria-label="Choisir la couleur verte">
                </button>

                <button
                    class="color-btn"
                    data-theme="purple"
                    data-color="#7651c5"
                    aria-label="Choisir la couleur violette">
                </button>

                <button
                    class="color-btn"
                    data-theme="pink"
                    data-color="#fa167d"
                    aria-label="Choisir la couleur rose">
                </button>
            </div>
        </div>
    </div>
        
    </header>

    <main id="main-content" role="main">
        <?= $content ?>
    </main>
    
    <footer>
        <nav aria-label="Navigation secondaire">
            <a href="#CGU">CGU</a>
            <a href="https://www.linkedin.com/in/sonia-bougamha/" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/SoniaB78" aria-label="Github"><i class="bi bi-github"></i></a>
        </nav>
        <p>© Sonia B. 2026</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="../public/assets/js/main.js"></script>
</body>
</html>
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
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Icons (Bootstrap Icons recommandé) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<header class="header">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">Sonia.dev</div>

        <nav>
            <a href="#tarifs">Tarifs</a>
            <a href="#parcours">Parcours</a>
            <a href="#contact">Contact</a>
        </nav>

        <button id="themeToggle" class="btn btn-light">🌙</button>
    </div>
</header>

<main>
    <?= $content ?>
</main>

<footer>
    <p>© Sonia</p>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
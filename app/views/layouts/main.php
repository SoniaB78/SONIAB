<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Mon site' ?></title>
</head>
<body>

<header>
    <nav>
        <a href="/">Accueil</a>
    </nav>
</header>

<main>
    <?= $content ?>
</main>

<footer>
    <p>© Sonia</p>
</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($seo['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($seo['description']) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Watchmaker's Guide </title>
    <link rel="icon" href="assets/images/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php if (file_exists("assets/css/{$pages}.css")) : ?>
        <link rel="stylesheet" href="assets/css/<?= $pages ?>.css">

    <?php endif; ?>
</head>

<body>

    <nav>
        <div class="nav-logo">
            <a href="index.php?pages=home">
                <img src="assets/images/logo/logo.webp" alt="logo du site The Watchmaker's Guide">
            </a>
        </div>
        <ul class="nav-menu">
            <li>
                <a href="index.php?pages=home">Accueil</a>
            </li>
            <li>
                <a href="index.php?pages=Outils-de-lhorloger">Outils de l'horloger</a>
            </li>
            <li>
                <a href="index.php?pages=Techniques">Techniques</a>
            </li>

        </ul>
        <div class="nav-burger">
            <div class="ligne"></div>
            <div class="ligne"></div>
            <div class="ligne"></div>
        </div>
    </nav>
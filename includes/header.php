<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calibre1200 </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php if (file_exists("assets/css/{$pages}.css")) : ?>
        <link rel="stylesheet" href="assets/css/<?= $pages ?>.css">
    <?php endif; ?>
</head>

<body>

    <nav>
        <div class="nav-logo">
            <img src="assets/images/logo/logo.webp" alt="logo du site Calibre1200">
        </div>
        <ul class="nav-menu">
            <li>
                <a href="index.php?pages=home">Accueil</a>
            </li>
            <li>
                <a href="index.php?pages=Outils-de-lartisan">Outils de l'artisan</a>
            </li>
            <li>
                <a href="index.php?pages=Techniques">Téchniques</a>
            </li>
            <li>
                <a href="index.php?pages=Lexique">Lexique</a>
            </li>
        </ul>
        <div class="nav-burger">
            <div class="ligne"></div>
            <div class="ligne"></div>
            <div class="ligne"></div>
        </div>
    </nav>
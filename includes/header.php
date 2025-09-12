<?php
/*
 * WatchMakers Guide - Site éducatif horlogerie
 * Copyright (C) 2025 Yoan Moulin
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 */

function isHomePage()
{

    if (!isset($_GET['pages']) || $_GET['pages'] === 'home') {
        return true;
    }
    return false;
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($seo['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($seo['description']) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchmaker's Guide </title>
    <link rel="icon" href="assets/images/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>">
    <?php if (file_exists("assets/css/{$pages}.css")) : ?>
        <link rel="stylesheet" href="assets/css/<?= $pages ?>.css">

    <?php endif; ?>
</head>

<body data-page="<?= $pages ?>">
    <nav class="<?= isHomePage() ? 'hide' : '' ?>">
        <div class="nav-logo">
            <a href="index.php?pages=home">
                <img src="assets/images/logo/logo.webp" alt="logo du site Watchmaker's Guide">
            </a>
        </div>
        <ul class="nav-menu">
            <li>
                <a href="index.php?pages=home">Accueil</a>
            </li>
            <li>
                <a href="index.php?pages=Decouvrir">Découvrir</a>
            </li>
            <li>
                <a href="index.php?pages=Fonctionnement">Fonctionnement</a>
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
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

$pages = $_GET['pages'] ?? 'home';

require_once 'includes/SEOHelper.php';
$seo = getSeoData($pages);

include 'includes/header.php';

switch ($pages) {
    case 'Decouvrir':
        include 'includes/pages/Decouvrir.php';
        break;
    case 'Complications':
        include 'includes/pages/Complications.php';
        break;
    case 'MesureDuTemps':
        include 'includes/pages/MesureDuTemps.php';
        break;
    case 'Quiz';
        include 'includes/pages/Quiz.php';
        break;
    case 'Fonctionnement':
        include 'includes/pages/Fonctionnement.php';
        break;
    case 'home':
        include 'includes/pages/home.php';
        break;
    case 'Outils-de-lhorloger':
        include 'includes/pages/Outils-de-lhorloger.php';
        break;
    case 'Techniques':
        include 'includes/pages/Techniques.php';
        break;
    default:
        echo "<h2>Page introuvable</h2>";
        break;
}

include 'includes/footer.php';

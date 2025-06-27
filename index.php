<?php
$pages = $_GET['pages'] ?? 'home';

require_once 'includes/SEOHelper.php';
$seo = getSeoData($pages);

include 'includes/header.php';

switch ($pages) {
    case 'MesureDuTemps':
        include 'includes/pages/MesureDuTemps.php';
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

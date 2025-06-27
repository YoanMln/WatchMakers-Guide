<?php
$pages = $_GET['pages'] ?? 'home';

include 'includes/header.php';

switch ($pages) {
    case 'home':
        include 'includes/pages/home.php';
        break;
    case 'Outils-de-lhorloger':
        include 'includes/pages/Outils-de-lhorloger.php';
        break;
    case 'Techniques':
        include 'includes/pages/Techniques.php';
        break;
    case 'Lexique':
        include 'includes/pages/Lexique.php';
        break;
    default:
        echo "<h2>Page introuvable</h2>";
        break;
}

include 'includes/footer.php';

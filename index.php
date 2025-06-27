<?php
$pages = $_GET['pages'] ?? 'home';

include 'includes/header.php';


$allowed_pages = array_map(function ($file) {
    return basename($file, '.php');
}, glob('includes/pages/*.php'));

if (in_array($pages, $allowed_pages)) {
    include "includes/pages/$pages.php";
} else {
    echo "<h2>Page introuvable</h2>";
}

include 'includes/footer.php';

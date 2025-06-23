<main>
    <div class="title-outils">
        <h1>Découvrez les différents outils de l'artisan horloger</h1>
        <div class="intro-page">
            <h2>Découvrez les instruments essentiels du métier d’horloger, entre tradition et précision.</h2>
        </div>
    </div>
</main>

<?php

$selectedOutils = isset($_POST['assemblage']) ? $_POST['assemblage'] : 'all';

?>

<div class="container-select">
    <form action="index.php?pages=outils-de-lhorloger" method="POST">

        <div class="list-choice">
            <label for="element-choice">Choix du type d'outils </label><br>
            <select name="outils" id="element-choice" onchange="this.form.submit()">
                <option value="all" <?= ($selectedOutils == 'all') ? 'selected' : '' ?>>Tous les outils</option>
                <option value="Assemblage" <?= ($selectedOutils == 'Assemblage') ? 'selected' : '' ?>>Assemblage</option>
                <option value="Reglage" <?= ($selectedOutils == 'Reglage') ? 'selected' : '' ?>>Réglage</option>
                <option value="Controle" <?= ($selectedOutils == 'Controle') ? 'selected' : '' ?>>Contrôle</option>
            </select>
        </div>

    </form>
</div>


<section class="container-tools">
    <h1>Les outils de l'horloger</h1>
    <div class="tools-grid">
        <?php
        // Lecture du fichier JSON des outils
        $json = file_get_contents('./data/assemblage.json');
        $tools = json_decode($json, true);

        if ($tools) {
            foreach ($tools as $tool) {

                $name = isset($tool['outil']) ? $tool['outil'] : $tool['outils'];
                $image = isset($tool['image']) ? $tool['image'] : 'default.webp';
                $use = isset($tool['Utilisation']) ? $tool['Utilisation'] : 'Utilisation non précisée.';

                echo '<article class="tool-card">';
                echo '<h2>' . htmlspecialchars($name) . '</h2>';
                echo "<img src='assets/images/img-assemblage/" . htmlspecialchars($image) . "' alt='" . htmlspecialchars($name) . "' class='tool-image'>";
                echo '<p>' . htmlspecialchars($use) . '</p>';
                echo '</article>';
            }
        } else {
            echo '<p>Les outils n\'ont pas pu être chargés.</p>';
        }
        ?>
    </div>
</section>
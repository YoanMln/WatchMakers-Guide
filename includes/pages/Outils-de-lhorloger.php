<main>
    <div class="title-pages">
        <h1>Les différents outils de l'artisan horloger</h1>
        <div class="intro-page">
            <h2>Découvrez les instruments essentiels du métier d’horloger, entre tradition et précision.</h2>
        </div>
    </div>


    <?php

    $selectedOutils = isset($_POST['outils']) ? $_POST['outils'] : 'all';

    ?>

    <div class="container-select">
        <form action="index.php?pages=Outils-de-lhorloger" method="POST">

            <div class="list-choice">
                <label for="element-choice">Choix du type d'outils </label><br>
                <select name="outils" id="element-choice" onchange="this.form.submit()">
                    <option value="assemblage" <?= ($selectedOutils == 'assemblage') ? 'selected' : '' ?>>Assemblage</option>
                    <option value="reglage&controle" <?= ($selectedOutils == 'reglage&controle') ? 'selected' : '' ?>>Réglage & Contrôle</option>
                    <option value="maintenance&entretien" <?= ($selectedOutils == 'maintenance&entretien') ? 'selected' : '' ?>>Maintenance & Entretien</option>
                </select>
            </div>

        </form>
    </div>


    <section class="container-card">

        <div class="card-grid">
            <?php

            $jsonFile = '';
            switch ($selectedOutils) {
                case 'assemblage';
                    $jsonFile = './data/assemblage.json';
                    break;
                case 'reglage&controle';
                    $jsonFile = './data/reglage&controle.json';
                    break;
                case 'maintenance&entretien';
                    $jsonFile = './data/maintenance&entretien.json';
                    break;
                default:
                    $jsonFile = './data/assemblage.json';
            }

            // Lecture du fichier JSON des outils
            $json = file_get_contents($jsonFile);
            $tools = json_decode($json, true);

            if ($tools) {
                foreach ($tools as $tool) {

                    $name = isset($tool['outil']) ? $tool['outil'] : $tool['outils'];
                    $image = isset($tool['image']) ? $tool['image'] : 'default.webp';
                    $use = isset($tool['Utilisation']) ? $tool['Utilisation'] : 'Utilisation non précisée.';

                    echo '<article class="card">';
                    echo '<h2>' . htmlspecialchars($name) . '</h2>';
                    echo "<img src='assets/images/img-outils/" . htmlspecialchars($image) . "' alt='" . htmlspecialchars($name) . "' class='card-image'>";
                    echo '<p>' . htmlspecialchars($use) . '</p>';
                    echo '</article>';
                }
            } else {
                echo '<p>Les outils n\'ont pas pu être chargés.</p>';
            }
            ?>
        </div>



    </section>
</main>
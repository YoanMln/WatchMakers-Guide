<main>

    <h1>Techniques d'assemblage en horlogerie</h1>

    <?php

    $selectedTechniques = isset($_POST['techniques']) ? $_POST['techniques'] : 'all';

    ?>

    <div class="container-select">
        <form action="index.php?pages=Techniques" method="POST">

            <div class="list-choice">
                <label for="element-choice">Choix de l'étape d'assemblage </label><br>
                <select name="techniques" id="element-choice" onchange="this.form.submit()">
                    <option value="all" <?= ($selectedTechniques == 'all') ? 'selected' : '' ?>>Toutes les étapes</option>
                    <option value="posage" <?= ($selectedTechniques == 'posage') ? 'selected' : '' ?>>Posage</option>
                    <option value="emboitage" <?= ($selectedTechniques == 'emboitage') ? 'selected' : '' ?>>Emboîtage</option>
                    <option value="reglage" <?= ($selectedTechniques == 'reglage') ? 'selected' : '' ?>>Réglage</option>
                </select>
            </div>

        </form>
    </div>
    <section class="container-tech">

        <div class="tech-grid">
            <?php

            $jsonFile = '';
            switch ($selectedTechniques) {
                case 'posage';
                    $jsonFile = './data/posage.json';
                    break;
                case 'emboitage';
                    $jsonFile = './data/emboitage.json';
                    break;
                case 'controle';
                    $jsonFile = './data/controle.json';
                    break;
                default:
                    $jsonFile = './data/posage.json';
            }


            $json = file_get_contents($jsonFile);
            $tech = json_decode($json, true);

            if ($tech) {
                foreach ($tech as $tech) {

                    $name = isset($tech['etape']) ? $tech['etape'] : $tech['etape'];
                    $image = isset($tech['image']) ? $tech['image'] : 'default.webp';
                    $use = isset($tech['détails']) ? $tech['details'] : 'detail non précisée.';

                    echo '<article class="tool-card">';
                    echo '<h2>' . htmlspecialchars($name) . '</h2>';
                    echo "<img src='assets/images/img-tech/" . htmlspecialchars($image) . "' alt='" . htmlspecialchars($name) . "' class='tech-image'>";
                    echo '<p>' . htmlspecialchars($use) . '</p>';
                    echo '</article>';
                }
            } else {
                echo '<p>Les téchniques n\'ont pas pu être chargés.</p>';
            }
            ?>
        </div>



    </section>
</main>
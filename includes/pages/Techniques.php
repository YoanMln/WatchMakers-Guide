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

</main>
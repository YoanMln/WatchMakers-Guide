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
?>

<article class="techniques-page">
    <h1 class="title-pages">Techniques d'assemblage en horlogerie</h1>

    <?php


    $selectedTechniques = isset($_POST['techniques']) ? $_POST['techniques'] : 'all';

    ?>

    <div class="container-select">
        <form action="index.php?pages=Techniques" method="POST">

            <div class="list-choice">
                <label for="element-choice">Choix de l'étape d'assemblage sur un mouvement 2824 </label><br>
                <select name="techniques" id="element-choice" onchange="this.form.submit()">

                    <option value="posage" <?= ($selectedTechniques == 'posage') ? 'selected' : '' ?>>Posage</option>
                    <option value="aiguillage" <?= ($selectedTechniques == 'aiguillage') ? 'selected' : '' ?>>Aiguillage</option>
                    <option value="tolerance&controle" <?= ($selectedTechniques == 'tolerance&controle') ? 'selected' : '' ?>>Tolérance et contrôle</option>
                </select>
            </div>

        </form>
    </div>
    <section class="container-card">

        <div class="card-grid">
            <?php

            $jsonFile = '';
            switch ($selectedTechniques) {
                case 'posage':
                    $jsonFile = './data/posage.json';
                    break;
                case 'aiguillage':
                    $jsonFile = './data/aiguillage.json';
                    break;
                case 'tolerance&controle':
                    $jsonFile = './data/tolerance&controle.json';
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
                    $details = isset($tech['details']) ? $tech['details'] : 'null';

                    echo '<article class="card">';
                    echo '<h2>' . htmlspecialchars($name) . '</h2>';
                    echo "<img src='assets/images/img-tech/" . htmlspecialchars($image) . "' alt='" . htmlspecialchars($name) . "' class='card-image'>";

                    // Si détails -> tableau = liste 

                    if (is_array($details)) {
                        echo '<ul class="list-custom">';
                        foreach ($details as $desc) {
                            echo '<li>' . htmlspecialchars($desc) . '</li>';
                        }
                        echo '</ul>';
                    } elseif (is_string($details)) {

                        echo '<p>' . htmlspecialchars($details) . '</p>';
                    } else {
                        echo '<p>Détail non précisé.</p>';
                    }

                    echo '</article>';
                }
            } else {
                echo '<p>Les techniques n\'ont pas pu être chargés.</p>';
            }
            ?>
        </div>



    </section>
    </main>
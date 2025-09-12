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

<main>
    <div class="header-container header-container-quiz">
        <h1 class="title-quiz">Quiz interactif</h1>

        <div class="container-quiz">
            <div id="difficulty"></div>
            <div id="progression"></div>
            <div id="question"></div>
            <div id="answers"></div>
            <p id="results"></p>
            <p id="retry"></p>
        </div>
        <div id="custom-alert" class="hidden">
            <p id="custom-alert-message"></p>
            <button onclick="closeAlert()">Question suivante</button>
        </div>
    </div>
</main>
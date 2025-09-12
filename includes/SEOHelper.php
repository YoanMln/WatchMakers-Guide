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

function getSeoData($pages)
{
    $seoData = [
        'home' => [
            'title' => "Accueil - À la découverte du temps | Watchmakers Guide",
            'description' => "Explorez l’univers fascinant de l’horlogerie, de la mesure du temps aux techniques d’assemblage.",
        ],

        'Decouvrir' => [
            'title' => "Portail de découverte | Watchmakers Guide",
            'description' => "Portail vers la découverte du monde horloger",
        ],

        'Complications' => [
            'title' => "Les Complications | Watchmakers Guide",
            'description' => "Explorez les mécanismes les plus complexes grâce à des rendus 3D.",
        ],

        'MesureDuTemps' => [
            'title' => "Mesure du temps - Frise historique | Watchmakers Guide",
            'description' => "Découvrez les grandes étapes de la mesure du temps à travers une frise chronologique interactive.",
        ],

        'Quiz' => [
            'title' => "Quiz interactif | Watchmakers Guide",
            'description' => "Testez vos connaissances en horlogerie avec un quiz au niveau adaptatif",
        ],

        'Techniques' => [
            'title' => "Techniques horlogères - Posage et Emboîtage | Watchmakers Guide",
            'description' => "Plongez dans les gestes techniques de l’horlogerie avec des visuels détaillés du posage et de l’emboîtage.",
        ],

        'Outils-de-lhorloger' => [
            'title' => "Outils de l’horloger - Les indispensables | Watchmakers Guide",
            'description' => "Apprenez à reconnaître les outils essentiels utilisés par les horlogers professionnels.",
        ],

        'Fonctionnement' => [
            'title' => "Fonctionnement d'une montre mécanique | Watchmakers Guide",
            'description' => "Découvrez le fonctionnement interne d'une montre mécanique, ses composants et leurs interactions.",
        ],
    ];

    return $seoData[$pages] ?? [
        'title' => "Watchmakers Guide",
        'description' => "Le site pour explorer la passion du temps, des techniques et des outils horlogers.",
    ];
}

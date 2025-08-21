<?php
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

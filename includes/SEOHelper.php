<?php
function getSeoData($pages)
{
    $seoData = [
        'home' => [
            'title' => 'Accueil - À la découverte du temps | Watchmakers Guide',
            'description' => 'Explorez l’univers fascinant de l’horlogerie, de la mesure du temps aux techniques d’assemblage.',
        ],
        'MesureDuTemps' => [
            'title' => 'Mesure du temps - Frise historique | Watchmakers Guide',
            'description' => 'Découvrez les grandes étapes de la mesure du temps à travers une frise chronologique interactive.',
        ],
        'Techniques' => [
            'title' => 'Techniques horlogères - Posage et Emboîtage',
            'description' => 'Plongez dans les gestes techniques de l’horlogerie avec des visuels détaillés du posage et de l’emboîtage.',
        ],
        'Outils-de-lhorloger' => [
            'title' => 'Outils de l’horloger - Les indispensables',
            'description' => 'Apprenez à reconnaître les outils essentiels utilisés par les horlogers professionnels.',
        ],
    ];

    return $seoData[$pages] ?? [
        'title' => 'Watchmakers Guide',
        'description' => 'Le site pour explorer la passion du temps, des techniques et des outils horlogers.',
    ];
}

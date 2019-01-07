<?php 

$villes = [
    'Londres',
    'Paris',
    'Bruxelles',
    'Lyon',
    'Lisbonne'
];

echo "<pre>";
print_r($villes);
echo "</pre>";
echo $villes[3];

$user = [
    'prenom' => 'Jean',
    'nom'    => 'Dupont',
    'age'    => '65 ans',
    'ville'  => 'Lyon'
];

echo "<pre>";
print_r($user);
echo "</pre>";
echo $user['ville'];

$continents = [
    'europe' => [
        'france',
        ''
    ],
    'asie' => 'coree du sud', 
    'afrique' => [
        'afrique du sud',
        'algérie',
        'egypte'
    ],
    'amerique du sud' => [
        'bolivie',
        'argentine',
        'brésil'
    ],
    'amerique du nord' => [
        'canada',
        'mexique'
    ],
    "oceanie" => [
        'nouvelle zélande',
        'kangourousland'
    ],
];


echo "<pre>";
var_dump($continents);
print_r($continents);
echo "</pre>";


$continents['europe'][] = 'allemagne';

$paysAsieActuel = $continents['asie'];

$continents['asie'] = [
    $paysAsieActuel,
    "chine"
];


echo "<pre>";
print_r($continents);
echo "</pre>";


// Afficher un sous élément de continents :

// On ne peut pas afficher $continents['asie'] avec echo car c'est un array !
echo $continents['asie'];

echo "<pre>";
print_r($continents['asie']);
echo "</pre>";


echo $continents['asie']['chine'][0]['population']


$monde = [
    'asie' => [
        'coree' => [],
        'chine' => 
            [
                'nom' => 'sichuan',
                'population' => 15000000,
                'etc' => '456'
            ],
            [
                'population' => 15000000,
                'etc' => '456'
            ],
    ]
]

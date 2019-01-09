<?php


$quatreCube = 4*4*4;

$cinqCube = 5*5*5;


function cube($x) {
    return $x*$x*$x;
}


$sixCube    = cube(6);
$septCube   = cube(7);

//$qteUsers = PDO('select count(*) from users');
//$usersCube = cube($qteUsers);


function afficheEnGras($t) {

    $phrase = "<strong>" . $t . "</strong>";

    return $phrase;
}

echo afficheEnGras('thomas');

echo '<br>';

echo "timestamp actuel: " . time();

echo '<br>';

date('d M Y H:i:s', 154541214);
date('d M Y H:i:s');

echo "<br>";


$var = "5";

intval($var);

function surface($longueur, $largeur) {

    $s = $longueur * $largeur;

    return $s;

}

echo "Votre appartement mesure " . surface(5, 2) . "m²";
echo '<br>';


function surfacePresquePrete($longueur, $largeur = 15) {

    $s = $longueur * $largeur;

    return $s;

}

echo "Votre appartement calculé avec une largeur connue de 15m mesure " . surfacePresquePrete(6, 20) . "m²";

echo '<br>';


$portefeuilleEur = 100;

//echo $portefeuilleEur . " € correspondent à " . convertEurYen($portefeuilleEur) . " yen.";


function volumeCylindre($rayon, $hauteur) {

    $rayonCarre = $rayon * $rayon;
    $valeurDePi = pi();

    $calculComplet = $valeurDePi * $rayonCarre * $hauteur;

    return $calculComplet;

}

echo volumeCylindre(5, 3);

echo "<br>";


$disques = [
    "highway to hell",
    "ok computer",
    "best of",
    "anthologie",
    "bonne année",
    "live"
];

$legumes = [
    "potirons",
    "tomates",
    "oignons",
    "patates",
    "poivrons"
];

function convertArrayToList($tableauQuelconque) {
    
    echo "<ul>";
        foreach ($tableauQuelconque as $k => $v) {
            echo "<li>" . $v . "</li>";
        }
    echo "</ul>";
}


convertArrayToList($disques);
convertArrayToList($legumes);

$legumes = [
    'printemps'  => ['asperge', 'blette', 'navet', 'radis'],
    'ete'        => ['comcombre', 'courgette', 'tomate', 'brocoli'],
    'automne'    => ['fenouil', 'haricot', 'oignon', 'poireau'],
    'hiver'      => ['potiron', 'topinampour', 'salsifi', 'betterave'],
];

$disquesTitres = [
    "highway to hell"   => ['titre1', 'titre2', 'titre3'],
    "ok computer"       => ['titre1', 'titre2', 'titre3'],
    "best of"           => ['titre1', 'titre2', 'titre3'],
    "anthologie"        => ['titre1', 'titre2', 'titre3'],
    "bonne année"       => ['titre1', 'titre2', 'titre3'],
    "live"              => ['titre1', 'titre2', 'titre3']
];

function convertArray2NiveauToList($tableauQuelconque) {

    echo "<ul>";
        foreach ($tableauQuelconque as $k => $v) {
            echo "<li>" . $k . "</li>";

            echo "<li>";
                echo "<ul>";
                    foreach ($v as $kk => $vv) {
                        echo "<li>" . $vv . "</li>";
                    }
                echo "</ul>";
            echo "</li>";
        }
    echo "</ul>";

}


convertArray2NiveauToList($legumes);
convertArray2NiveauToList($disquesTitres);


$disquesTitresCarac = [
    "highway to hell"   => [
        'titre1' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ],
        'titre2' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ], 
        'titre3' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ]
    ],
    "ok computer"       => [
        'titre1' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ],
        'titre2' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ], 
        'titre3' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ]
    ],
    "best of"           => [
        'titre1' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ],
        'titre2' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ], 
        'titre3' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ]
    ],
    "anthologie"        => [
        'titre1' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ],
        'titre2' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ], 
        'titre3' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ]
    ],
    "bonne année"       => [
        'titre1' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ],
        'titre2' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ], 
        'titre3' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ]
    ],
    "live"              => [
        'titre1' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ],
        'titre2' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ], 
        'titre3' => [
            "duree" => '2:30',
            "artistes" => "John Doe feat. Master T",
        ]
        ]
];


/**
 * On affiche l'aperçu de notre tableau récursif pour vérifier l'état des données
 */
echo "<pre>";
print_r($disquesTitresCarac);
echo "</pre>";


function convertTableauxRecursifs($tableauQuelconque) {

    // On ouvre la liste
    echo "<ul>";

        // Pour chaque élément du tableau en tant que clé=>valeur (key=>potentielSousTableau)
        foreach ($tableauQuelconque as $key => $potentielSousTableau) {

            // On affiche déjà
            echo "<li>" . $key ;

            // si $potentielSousTableau est effectivement un sous tableau (is_array)...
            if (is_array($potentielSousTableau)) {

                echo "</li>";

                // Alors il repasse dans la même fonction !
                // C'est à dire qu'on réouvre un <ul> (voir ci-dessus)
                // et qu'on reteste s'il a des enfants sous-tableaux.
                echo "<li>";
                    convertTableauxRecursifs($potentielSousTableau);
                echo "</li>";
            }

            // Sinon, si ce n'est pas un tableau...
            else {

                // Alors c'est une valeur (string/bool/int), on l'affiche.
                echo " : " . $potentielSousTableau . "</li>";
            }
        }

    echo "</ul>";
}

convertTableauxRecursifs($disquesTitresCarac);

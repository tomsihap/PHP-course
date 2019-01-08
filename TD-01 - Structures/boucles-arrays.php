<?php

/**
 * Boucle While
 */
/* $i = 0;
while ($i <= 100) {
    echo "N°" . $i . " : Je n'aurai pas du jeter de l'encre sur le professeur.";
    echo "<br>";
    $i++;
} */



/**
 * Boucle for
 */

/* for ($i=0; $i <= 100; $i++) {

    if ($i < 100) {
        echo $i . " patates";
        echo "<br>";
    }

    else {
        echo "<h1>" . $i . " patates</h1>";
    }
} */


/* $disques = [
    "the wall",
    "smoke on the water",
    "legend",
    "money for nothing",
    "le pénitentier",
    "help",
    "white album",
    "sgt pepper ...",
    "hard days night",
    "tata yoyo"
];


foreach ($disques as $key => $disque) {

    $keyForHumans = $key + 1;

    echo "disque #" . $keyForHumans . ": " . $disque;
    echo "<br>";
}
 */
// tableaux associatifs et foreach

/* $legumes = [
    'printemps'  => 'asperge',
    'ete'        => 'comcombre',
    'automne'    => 'fenouil',
    'hiver'      => 'potiron',
    'entrecôte',
    'steak',
    'patates',
    'tomates',
];

foreach ($legumes as $key => $legume) {
    echo "<strong>" . $key . "</strong>: " . $legume . "<br>";
} */


$legumes_array = [
    'printemps'  => [
        'asperge', 
        'blette', 
        'navet', 
        'radis'
    ],
    'ete'        => [
        'comcombre', 
        'courgette', 
        'tomate', 
        'brocoli'
    ],
    'automne'    => [
        'fenouil', 
        'haricot', 
        'oignon', 
        'poireau'
    ],
    'hiver'      => [
        'potiron', 
        'topinampour', 
        'salsifi', 
        'betterave'
    ],
];

/* 
foreach($legumes_array as $saison => $legumesSaison) {

    echo "<h3>" . $saison . "</h3>";
    echo "<ul>";

    foreach ($legumesSaison as $k => $legume) {

        $kForHumans = $k+1;
        echo "<li>" . $kForHumans . ": " . $legume . "</li>";
    }

    echo "</ul>";

} */

/**
 * Rechercher la clé dans un tableau
 */

if (array_key_exists("annee", $legumes_array) ) {
    echo "Année existe dans le tableau !";
}
else {
    echo "Année n'existe pas ";
}

echo "<br>";


/**
 * Rechercher la valeur dans un tableau
 */
$legumeSearch = "navet";

if ( in_array($legumeSearch, $legumes_array['printemps']) ) {
    echo "il y a des ".$legumeSearch." au printemps";
}
else {
    echo "pas de ".$legumeSearch;
}

echo "<br>";


/**
 * Rechercher l'indice ou la clé d'une valeur dans un tableau
 */
var_dump( 
    array_search(['asperge', 'blette', 'navet', 'radis'],
                 $legumes_array)
);

echo "<br>";
/**
 * Rechercher la saison d'un légume
 */

foreach ($legumes_array as $saison => $legumesList) {
    
    if (array_search('salsifi', $legumesList) ) {
        echo "salsifi se trouve dans " . $saison;
        echo "<br>";

    }
    else {
        echo "salsifi ne se trouve pas dans " . $saison;
        echo "<br>";
    }

}
?>

<?php

$legumes = [
    'printemps'  => ['asperge', 'blette', 'navet', 'radis'],
    'ete'        => ['comcombre', 'courgette', 'tomate', 'brocoli'],
    'automne'    => ['fenouil', 'haricot', 'oignon', 'poireau'],
    'hiver'      => ['potiron', 'topinampour', 'salsifi', 'betterave'],
];


echo "<ul>";
    foreach ($legumes as $saison => $legumesSaison) {
        echo "<li>" . $saison . "</li>";

        echo "<li>";
            // J'utilise mon tableau $legumesSaison que je met dans un <ul> :
            echo "<ul>";
                foreach($legumesSaison as $legume) {
                    echo "<li>" . $legume . "</li>";
                }
            echo "</ul>";
        echo "</li>";
    }
echo "</ul>";


// Attention, les variables intermédiaires restent en mémoire !
// $legumesSaison existe même hors du foreach et garde la dernière valeur qu'on lui a donné (hiver =>)
echo "<pre>";
    var_dump($legumesSaison);
echo "</pre>";

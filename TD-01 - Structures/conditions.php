<?php

$ageVisiteur = 8;

if ($ageVisiteur < 10) {
    // action
    ?>
        <h1>bienvenue kids!</h1>
    <?php
}
elseif ($ageVisiteur >= 10 && $ageVisiteur < 20) {
    ?>
    Bienvenue dans la page ados
    <?php
}
else {
    echo "Bienvenue chez les grands";
}


echo "<br>";

$note = 20;

switch ($note) {
    case 0:
        echo "tu es un cancre";
        break;
    case 10:
        echo "la moyenne !";
        break;
    case 20:
        echo "bravo";
        break;
    default:
        echo "une note trop standard";
}


$ageVisiteur = 17;

$majeur = ($ageVisiteur >= 18) ? true : false;


if ($ageVisiteur >= 18) {
    $majeur = true;
}
else {
    $majeur = false;
}

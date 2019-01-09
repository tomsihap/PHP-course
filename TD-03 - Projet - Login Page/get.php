// A tester avec : ?user_id=65&username=Batman&is_admin=true

<?php

/**
 * Les données des variables GET sont systématiquement des string.
 * 
 * On peut valider et convertir les données pour qu'elles aient le type
 * souhaité :
 */

// Gestion des INT :
// Si je passe une valeur qui n'est pas un INT, alors cela retournera int(0)
$_GET['user_id'] = intval($_GET['user_id']);
$_GET['user_id'] = (int) $_GET['user_id'];

// Gestion d'un booléen
$_GET['is_admin'] = ($_GET['is_admin'] == "true") ? true : false;

// Cela permet aussi de valider le type de données!
if ($_GET['user_id'] !== 0) {
    // Je m'execute uniquement si user_id n'est pas égal à 0 (donc a été converti en INT correctement => n'était pas un string)
}

echo "<pre>";
var_dump($_GET);
echo "</pre>";
//"http://localhost/?user_id=16&is_admin=false"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Profil de l'user #<?= $_GET['user_id']; ?> (<?= $_GET['username']; ?>)</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, error! Error voluptates voluptate labore, magnam perferendis, libero ipsa facilis quasi veritatis fuga nam voluptas pariatur ratione rem vitae id qui?</p>

<?php

if ($_GET['is_admin'] === true) {
?>
<button>Lancer l'arme nucléaire</button>

<?php
}
?>    

</body>
</html>

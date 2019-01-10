<?php
session_start();

function connectDb($dbname='', $login = 'root', $password = '', $port='3306', $host = 'localhost') {
    try {
        // Essaie de faire ce script...
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);

        return $bdd;
    }
    catch (Exception $e) {
        // Sinon, capture l'erreur et affiche la
        die('Erreur : ' . $e->getMessage());
    }
}


$bdd = connectDb('phpcourse', 'root', '', 3308);


$response = $bdd->query('
        SELECT * 
        FROM users
        WHERE email = "'.$_POST['email'].'"
        AND password = "'.$_POST['password'].'"
    ');

$donnees = $response->fetch();

if ($donnees){

    $_SESSION['is_logged_in'] = true; ?>


    <p>Bienvenue <?= $_POST['email']; ?> !</p>

    <a href="disconnect.php" class="btn btn-danger">Deconnexion</a>

    <?php
}

else {
    // Cas KO : l'user n'est pas logué, on envoie une erreur "Erreur login"
    ?>
        <p style="color:red"><strong>Attention :</strong> Problème de login !</p>
        <a href="form.php" class="btn btn-danger">Retour au formulaire</a>

    <?php
}

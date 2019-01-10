<?php
require_once('helper.php');

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

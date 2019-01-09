<?php
session_start();


$emailValide = "admin@gmail.com";
$passwordValide = "qsdfgh";


if( isset($_POST['email']) && $_POST['email'] === $emailValide ) {
    // Cas où l'email est correct   

    if ( isset( $_POST['password'] ) && $_POST['password'] === $passwordValide ) {

        $_SESSION['is_logged_in'] = true;

        // Cas où l'utilisateur est loggué

        ?>
            <h3>Bienvenue sur votre profil, <?= $_POST['email']; ?></h3>
            <p>Lorem ipsum dolor sit amet <strong>consectetur</strong> adipisic
            ing elit. Autem praesentium fugiat dolores culpa id laborum atque 
            neque, quis sunt voluptatum ullam vero quos voluptatem dignissimos
             repudiandae maiores inventore necessitatibus? Nemo!</p>

        <?php
    }

    else {

        ?>
            <p><strong>Attention :</strong> le mot de passe est incorrect !</p>
        <?php
        // Cas où l'utilisateur existe mais le mot de passe n'est pas correct
    }

}
else {
    // Cas où l'e-mail n'existe pas
    ?>
            <p><strong>Attention :</strong> l'email n'existe pas !</p>

    <?php
}

<?php
session_start();

if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {

    // Je suis logué, je me déconnecte légitimement.

    session_destroy();

    echo "<h3>Vous avez été déconnecté.</h3>";
    echo "<br>";
    echo "<a href='form.php'>Retour vers la page de login.</a>";

    ?>
    <script>
        setTimeout(() => {
            window.location.replace("/form.php");
        }, 3000);
    </script>
    <?php

}

else {
    // Redirection vers l'accueil car je ne suis pas logué, je ne peux pas me déconnecter.
    Header('Location: form.php');
}

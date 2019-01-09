<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
            

                <?php 
                    if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true ) {
                        // afficher un profil user
                        ?>
                        <h3>Vous êtes déjà logué.</h3>

                        <a href="disconnect.php" class="btn btn-danger">Deconnexion</a>

                        <?php
                    }

                    else {
                        // afficher la login page
                        ?>
                        <h3>Formulaire de connexion :</h3>

                        <form action="login.php" method="POST" enctype="multipart/form-data">
                            <label for="emailInput">Adresse e-mail</label>
                            <input id="emailInput" class="form-control" type="email" name="email" required>

                            <label for="passwordInput">Mot de passe</label>
                            <input id="passwordInput" class="form-control" type="password" name="password" required>

                            <label for="fileInput">CV en .pdf</label>
                            <input type="file" name="fichier" id="fileInput">

                            <hr>

                            <button type="submit" class="btn btn-success float-right">Connexion</button>

                        </form>
                        
                    <?php } ?>

            </div>
        </div>
    </div>

    
</body>
</html>

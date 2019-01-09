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
            
                <h3>Formulaire de connexion :</h3>

                <form action="login.php" method="POST">
                    <label for="emailInput">Adresse e-mail</label>
                    <input id="emailInput" class="form-control" type="email" name="email" required>

                    <label for="passwordInput">Mot de passe</label>
                    <input id="passwordInput" class="form-control" type="password" name="password" required>

                    <hr>

                    <button type="submit" class="btn btn-success float-right">Connexion</button>

                </form>
            
            </div>
        </div>
    </div>

    
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/styleNav.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../public/css/connexion.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Connexion</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";  ?>

    <div class="center">
        <div class="formulaire">
            <h2>Connexion</h2>
            <br><br>
            <form method="POST" action="">
                <input class="input_control" type="email" name="mailConnect" placeholder="Mail">
                <input class="input_control" type="password" name="mdpConnect" placeholder="Mot de passe">
                <input class="send" type="submit" name="formConnect" value="Se connecter !">
            </form>

            <?php

            if (isset($erreur)) {
                echo $erreur;
            }
            ?>
        </div>
    </div>


</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/home.css" rel="stylesheet">
    <link href="../public/css/styleNav.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";  ?>

    <h1>Home Page</h1>
    <h2>Liste des sondages</h2>

    <?php if ($_SESSION) { ?>

        <div class="container">
            <?php
            foreach ($sondages as $sondage) { ?>
                <div class="sondage">
                    <a id="link" href="?page=sondage&sondage=<?php echo $sondage->id; ?>">Titre : <?php echo $sondage->titre; ?></a>
                </div>
            <?php }
            ?>
        </div>
    <?php } else { ?>
        <p>Connectez-vous pour accéder aux sondages</p>
    <?php }  ?>

</body>

</html>
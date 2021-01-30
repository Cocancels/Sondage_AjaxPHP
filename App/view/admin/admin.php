<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/styleAdmin.css" rel="stylesheet">
    <link href="../public/css/styleNav.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Admin</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";  ?>
    <h1>Page admin</h1>
    <a href="?page=admin-create">Créer un sondage</a>
    <a href="?page=home">Home</a>
    <br>

    <div class="container">
        <?php
        foreach ($sondages as $sondage) { ?>
            <div class="sondage">
                <p>Titre : <?php echo $sondage->titre; ?></p>
                <?php foreach ($questions as $question) {
                    if ($sondage->id == $question->id_sondage) { ?>
                        <p>Question :<?php echo $question->titre; ?></p>
                        <?php foreach ($reponses as $reponse) {
                            if ($question->id == $reponse->id_question) { ?>
                                <p>Réponse :<?php echo $reponse->reponse; ?></p>
                            <?php } ?>
                        <?php } ?>
                <?php }
                } ?>
            </div>
        <?php }
        ?>
    </div>


</body>

</html>
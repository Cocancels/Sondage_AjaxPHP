<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/styleNav.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";  ?>

    <h1>Créer un sondage</h1>
    <input id="nombreQuestions" type="number" max="4" name="nombreQuestions" placeholder="Nombre de questions">
    <button id="add">Confirmer</button>
    <form method="POST" action="">

        <input type="text" name="titre" placeholder="Titre du sondage">
        <div id="questions">
        </div>
        <input type="submit" name="formQuestions">

    </form>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</html>
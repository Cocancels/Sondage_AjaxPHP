<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/sondage.css" rel="stylesheet">
    <link href="../public/css/styleNav.css" rel="stylesheet">
    <title>Sondage</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";  ?>

    <p>Timer : <span class="timer">40</span> secondes</p>
    <h1 class="title"></h1>
    <div class="questionContent">

    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/js/sondage.js"></script>

</html>
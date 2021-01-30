<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require ROOT . "/App/view/navbar.php";  ?>
<h1> <?php echo $user[0]->pseudo; ?></h1>
<h2> <?php echo $user[0]->email; ?></h2>
<a href="?page=editProfil">Editer ton profil</a>
<a href="?page=deconnexion">Deconnexion</a>
</body>
</html>
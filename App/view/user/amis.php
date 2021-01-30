<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/amis.css" rel="stylesheet">
    <link href="../public/css/styleNav.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";  ?>
    <div id="addfriend">
        <h1>PAGE AMIS</h1>

        <form method="POST" action="">
            <input type="text" name="friend" placeholder="Ajoutez un ami">
            <button name="formFriend" id="addFriend">Ajouter</button>
        </form>
    </div>
    <?php

    foreach ($friends as $friend) { ?>
        <div class="friend">
            <?php if ($friend->id != $_SESSION['id']) { ?>
                <p>Ami : <?php echo $friend->pseudo ?></p>
                <a href="?page=deleteFriend&friendid=<?php echo $friend->id ?>">Retirer cet ami</a>
                <a href="?page=friendChat&friendid=<?php echo $friend->id ?>">Messages</a>
                <a href="?page=sendMail&friendid=<?php echo $friend->id ?>">Envoyer une invitation de sondage</a>
            <?php } ?>
        </div>
    <?php }
    if ($isSet) {
        if (count($result) == 0) {
            echo "<script> alert('L\'utilisateur que vous recherchez n\'existe pas') </script>";
        }

        if ($isFriend) {
            echo "<script> alert('Vous avez déjà cet utilisateur en ami') </script>";
        }

        if ($selfFriend) {
            echo "<script> alert('Vous ne pouvez pas vous ajouter vous-mêmes en ami !') </script>";
        }
    }
    ?>


</html>
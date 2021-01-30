<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/friendChat.css" rel="stylesheet">
    <link href="../public/css/styleNav.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Chat avec pipou</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";  ?>


    <div id="chatBox">
        <h1>Vos messages</h1>
        <?php foreach ($messages as $message) { ?>
            <p><?php if ($message->writtedBy == $message->id) { ?>
                    <p><?php echo $message->pseudo; ?> : <?php
                                                            echo $message->content ?></p>
                <?php } ?></p>
        <?php } ?>

        <form id="form" method="POST" action="">
            <input type="text" name="content" id="message-content" placeholder="Envoyez un message">
            <button name="formChat" type="submit">Envoyer le message</button>
        </form>

    </div>



    <a id="link" href="?page=amis">Retour</a>


</body>

</html>
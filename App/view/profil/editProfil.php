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
    <div id="banniere">
        <?php require ROOT . "/App/view/navbar.php";  ?>

        <h2>Edition de mon profil</h2>
        <table>
            <form method="POST" action="">
                <tr>
                    <td>
                        <label>Pseudo :</label>
                    </td>
                    <td>
                        <input type="text" name="newpseudo" placeholder="nouveau pseudo" value="<?php echo $_SESSION['pseudo']; ?>">
                    </td>
                </tr>
                <br> <br>
                <tr>
                    <td>
                        <label>Mail :</label>
                    </td>
                    <td>
                        <input type="email" name="newmail" placeholder="nouveau mail" value="<?php echo $_SESSION['email']; ?>">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Mot de passe :</label>
                    </td>
                    <td>
                        <input type="password" name="newmdp" placeholder="nouveau mot de passe">
                    </td>
                </tr>
                <br> <br>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Valider la modification">
                        <br> <br>
                    </td>
                </tr>
            </form>
        </table>
    </div>


    <?php
    if (isset($erreur)) {
        echo $erreur;
    }

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/styleNav.css" rel="stylesheet">
    <link href="../public/css/inscription.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php require ROOT . "/App/view/navbar.php";  ?>
    <div class="center">
        <h2>Inscription</h2>
        <br><br>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>
                        <label for="pseudo">Pseudo :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Votre pseudo" name="pseudo" value="<?php /*Si erreur, conserve le peseudo*/ if (isset($pseudo)) {
                                                                                                echo $pseudo;
                                                                                            } ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mail">Mail :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="Votre mail" name="email" value="<?php /*Si erreur, conserve le pseudo*/ if (isset($mail)) {
                                                                                                echo $mail;
                                                                                            } ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mail2">Confirmation du Mail :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="Confirmation de votre mail" name="email2" value="<?php /*Si erreur, conserve le peseudo*/ if (isset($mail2)) {
                                                                                                                echo $mail2;
                                                                                                            } ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="motdepasse">Mot de passe :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Mot de passe" name="motdepasse">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="motdepasse2">Confirmation du mot de passe :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Confirmation mot de passe" name="motdepasse2">
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" name="forminscription" value="Je m'inscris">
        </form>
    </div>
    <?php
    if (isset($erreur)) {
        echo $erreur;
    }

    ?>
    </div>
</body>

</html>
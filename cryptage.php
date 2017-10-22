<?php
session_start();
require('affichage_nom.php')
?>

<!DOCTYPE html>
<html>
<!-- Onglet -->
    <head>
        <meta charset="utf-8" />
        <title>Cryptage<?php echo nom(); ?></title>
        <link rel="icon" type="image/png" href="images/logo.png" />
        <link rel="stylesheet" type="text/css" href="css/style_pc.css" />
    </head>

<!-- Corps de la page -->
    <body>
        <!-- Tete de page -->
        <header>
            <img src="images/logo.png" alt="Logo du site" id="logo_baniere" />
            <h1 style="display: inline-block;">Electron's ique</h1>
        </header>

        <!-- Navigation -->
        <nav>
            <?php include('tableaux/tableaux_navigation.php'); ?>
        </nav>
        
        <!-- Page -->
        <main>
            <?php
                if (isset($_POST['login']) AND isset($_POST['pass'])){
                    $login = $_POST['login'];
                    $pass = $_POST['pass'];
                    $pass_crypte = crypt($pass); // On crypte le mot de passe

                    echo '<p>Ligne à copier dans le .htpasswd :<br />' . $login . ':' . $pass_crypte . '</p>';
                }

                else // On n'a pas encore rempli le formulaire
                {
                ?>

                <p>Entrez votre login et votre mot de passe pour le crypter.</p>
                <fieldset><legend>Cryptage du mot de passe</legend>
                <form method="post">
                        <label for="crypt_login">Login:</label><input type="text" name="login" id="crypt_login" placeholder="Pseudo..."><br /><br />
                        <label for="crypt_pass">Mot de passe:</label><input type="text" name="pass" id="crypt_pass" placeholder="Mot de passe..."><br /><br />
                        <input type="submit" value="Crypter">
                </form>
                </fieldset>
                <?php
                }
                ?>
        </main>

        <!-- Pied de page -->
        <footer>
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->  
    </body>
</html>
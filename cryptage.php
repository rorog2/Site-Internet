<?php
session_start();
?>

<!DOCTYPE html>
<html>
<!-- Onglet -->
    <head>
        <meta charset="utf-8" />
        <title>Electron's ique</title>
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
            <?php include('affichage_tableaux.php'); ?>
        </nav>
        
        <!-- Page -->
        <div class="general">
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

                <form method="post">
                    <p>
                        Login : <input type="text" name="login"><br />
                        Mot de passe : <input type="text" name="pass"><br /><br />
    
                        <input type="submit" value="Crypter !">
                    </p>
                </form>

                <?php
                }
                ?>
        </div>

        <!-- Pied de page -->
        <footer>
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->  
    </body>
</html>
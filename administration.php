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
            if(isset($_GET['deconnection'])){
                session_destroy();
                header('Location: index.php');
            }
            elseif(isset($_GET['mdpoublie'])){
                
            }
            elseif(isset($_GET['inscription']) AND !isset($_SESSION['pseudo'])){ ?>
                <form action="traitement.php?inscription" method="post" onsubmit="verification_inscription(); return false;">

                </form>
            <?php }
            elseif(isset($_GET['connection']) AND !isset($_SESSION['pseudo'])){ ?>
                <h1 id="centrer_texte">Connection</h1>
                <p>Vous connecter vous permettra d'avoir accés au chats, de télécharger des programmes et de participer au développement du programme de calcul en nous faisant remonter les bugs présents.</p> 
                <form action="traitement.php?connection" method="post" onsubmit="verification_connection(); return false;">
                    <fieldset>
                        <legend>Connection</legend>
                        <label for="pseudo">Pseudo: </label><input type="text" name="pseudo" id="pseudo" placeholder="Pseudo..." /><br><br>
                        <label for="mdp">Mot de passe: </label><input type="password" name="mdp" id="mdp" placeholder="Mot de passe..." /><br><br>
                        <input type="button" onclick="verification_connection()" value="Connection" />
                    </fieldset>
                </form>
                <p>Vous avez oublié votre mot de passe ? <a href="administration.php?mdpoublie">Cliquez ici...</a></p>
                <p>Vous n'ete pas encore inscript ? <a href="administration.php?inscription">Inscrivez-vous...</a></p>
            <?php }
            else{
                
            }
            ?>
        </div>

        <!-- Pied de page -->
        <footer>
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->  
    </body>
    <script src="administration.js"></script>
</html>
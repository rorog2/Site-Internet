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
        <nav class="dessous">
            <p>Nombre de visiteur: </p>
            <p>Membres connecté: </p>
        </nav>

        <!-- Page -->
        <div class="general">
            <?php
            if(isset($_GET['deconnection'])){
                session_destroy();
                header('Location: index.php');
            }
            elseif(isset($_GET['inscription'])){

            }
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
    <script src="script.js"></script>
</html>
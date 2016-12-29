<?php
session_start();
?>

<!DOCTYPE html>
<html>
<!-- Onglet -->
    <head>
        <meta charset="utf-8" />
        <title>Electron's ique</title>
        <link rel="icon" type="image/png" href="../images/logo.png" />
        <link rel="stylesheet" type="text/css" href="../css/style_pc.css" />
    </head>

<!-- Corps de la page -->
    <body>
        <!-- Tete de page -->
        <header>
            <img src="../images/logo.png" alt="Logo du site" id="logo_baniere" />
            <h1 style="display: inline-block;">Electron's ique</h1>
        </header>

        <!-- Navigation -->
        <nav>
            <?php include('../affichage_tableaux.php'); ?>
        </nav>
        
        <!-- Page -->
        <div class="general">
            <?php
            function random($car) {
                $string = "";
                $chaine = "abcdefghijklmnpqrstuvwxy";
                srand((double)microtime()*1000000);
                for($i=0; $i<$car; $i++) {
                    $string .= $chaine[rand()%strlen($chaine)];
                }
                return $string;
            }
            echo random(8);
            ?>
        </div>

        <!-- Pied de page -->
        <footer>
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->  
    </body>
</html>
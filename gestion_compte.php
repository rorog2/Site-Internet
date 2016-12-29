<?php
session_start();
?>

<!DOCTYPE html>
<html>
<!-- Onglet -->
    <head>
        <meta charset="utf-8" />
        <title>Gestion du compte: <?php echo $_SESSION['pseudo']; ?></title>
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
            <h1 id="centrer_texte">Gestion du compte</h1>
            <p>Vous êtes connecté en tant que: <?php echo $_SESSION['pseudo']; ?>;</p>
            <?php
            if($_SESSION['pseudo'] == 'admin'){
                include('gestion_compte/admin.php');
            }
            else{
                include('gestion_compte/utilisateur.php');
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
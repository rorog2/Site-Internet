<?php
session_start();
require('affichage_nom.php');
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=electrons;charset=utf8', 'root', 'macedoine224371', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

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
        <center>
            <ul class="navigation_h">
                <li class="navigation_h" onclick="document.location.href = 'creationpage.php?createBDD'">Création BDD</li>
                <li class="navigation_h" onclick="document.location.href = 'creationpage.php'">Création contenu</li>
                <li class="navigation_h" onclick="document.location.href = 'creationpage.php?contenuBDD'">Contenu BDD</li>
            </ul>
        </center>
        <?php
            if(isset($_GET['createBDD'])){
                include('creationpage/creationbdd.php');
            }
            elseif(isset($_GET['contenuBDD'])){
                include('creationpage/contenubdd.php');
            }
            else{
                include('creationpage/creation_page.php');
            }
        ?>
        </div>

        <!-- Pied de page -->
        <footer>
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->  
    </body>
    <script src="creationpage/script.js"></script>
</html>
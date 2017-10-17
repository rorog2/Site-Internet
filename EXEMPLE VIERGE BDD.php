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
        <main>
            <?php
                $contenu = $bdd->query('SELECT * FROM arduino ORDER BY id');
                while($liste = $contenu->fetch()){
                    echo '<'.$liste['balise'].' '.$liste['attribut'].'>'.$liste['contenu'].'</'.$liste['balise'].'>';
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
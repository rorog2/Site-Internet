<?php
session_start();
require('affichage_nom.php');
?>

<!DOCTYPE html>
<html>
<!-- Onglet -->
    <head>
        <meta charset="utf-8" />
        <title>Electron's ique<?php echo nom(); ?></title>
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
            <p><?php if(isset($_SESSION['pseudo'])){ echo 'Bonjour '.$_SESSION['pseudo'];}else{ echo 'Bonjour visiteur';} ?>, que voulez vous faire ?</p>
    		<?php include('affichage_tableaux.php'); ?>
    	</nav>

    	<!-- Page -->
    	<div class="general">
    		<h1 id="centrer_texte"><u>ELECTRON'S IQUE</u></h1>
    		<center><figure>
                <img src="images/logo.png" alt="LED" style="width: 40%;" />
                <figcaption class="logo">Logo du site (LED)</figcaption>
            </figure></center>
            <p id="centrer_texte">Bienvenue sur le site electron's ique, sur ce site vous aurez des information sur des calcul, des composants en rapport avec l'électronique. Vous pourrez aussi discuter dans le chat pour poser vos questions ou avoir des informations</p>
    	</div>

    	<!-- Pied de page -->
    	<footer>
    		<p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
    	</footer>
<!-- Fin de la page -->  
    </body>
</html>

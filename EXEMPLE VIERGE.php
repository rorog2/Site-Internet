<!DOCTYPE html>
<html>
<!-- Onglet -->
    <head>
        <meta charset="utf-8" />
        <title>Electron</title>
        <link rel="icon" type="image/png" href="images/logo.png" />
        <link rel="stylesheet" type="text/css" href="css/style_pc.css" />
    </head>

<!-- Corps de la page -->
    <body>
    	<!-- Tete de page -->
    	<header>
    		<img src="images/logo.png" alt="Logo du site" id="logo_baniere" />
    		<h1 style="display: inline-block;">Electron</h1>
    	</header>

    	<!-- Navigation -->
    	<nav>
    		<?php if(isset($_SESSION['pseudo'])){include("tableaux_connecter.php");}else{include("tableaux_non_connecter.php");} ?>
    	</nav>

    	<!-- Page -->
    	<div class="general">
    		<h1 id="centrer_texte"><u>ELECTRON</u></h1>
    		<p>Du texte</p>
    	</div>

    	<!-- Pied de page -->
    	<footer>
    		<p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les reseaux sociaux !</p>
    	</footer>
<!-- Fin de la page -->  
    </body>
</html>
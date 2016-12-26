<?php
session_start();
?>

<!DOCTYPE html>
<html>
<!-- Onglet -->
    <head>
        <meta charset="utf-8" />
        <title>Electron's ique</title>
        <link rel="icon" type="image/png" href="../../images/logo.png" />
        <link rel="stylesheet" type="text/css" href="../../css/style_pc.css" />
        <script>
        function redirection(){
        var nom = document.getElementById("nom").value;
        var form = document.getElementById("formulaire");
        alert("Votre nom est " + nom);
        if(nom === "admin"){
            form.submit();
        }
        else{
            form.reset();
        }
        }
        </script>
    </head>

<!-- Corps de la page -->
    <body>
        <!-- Tete de page -->
        <header>
            <img src="../../images/logo.png" alt="Logo du site" id="logo_baniere" />
            <h1 style="display: inline-block;">Electron's ique</h1>
        </header>

        <!-- Navigation -->
        <nav>
        </nav>
        <nav class="dessous">
            <p>Nombre de visiteur: </p>
            <p>Membres connecté: </p>
        </nav>

        <!-- Page -->
        <div class="general">
            <form action="../../index.php" method="post" id="formulaire">
                <p>
                    <label for="nom">Votre nom: </label><input type="text" name="nom" id="nom" placeholder="Votre nom..." />
                    <br />
                    <input type="button" value="Redirection" onclick="redirection()" />
                </p>
            </form>
        </div>

        <!-- Pied de page -->
        <footer>
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->  
    </body>
</html>
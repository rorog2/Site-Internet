<?php
session_start();

function classe(){
    if(isset($_GET['inscription'])){
        return '';
    }
    elseif(isset($_GET['connexion'])){
        return 'petit';
    }
    elseif(isset($_GET['mdpoublie'])){
        return 'petit';
    }
    else{
        return '';
    }
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
            <?php
            if(isset($_GET['deconnection'])){
                session_destroy();
                header('Location: index.php');
            }
            elseif(isset($_GET['mdpoublie'])){
                include('formulaire_administration/mdpoublie.php');
            }
            elseif(isset($_GET['inscription']) AND !isset($_SESSION['pseudo'])){
                include('formulaire_administration/inscription.php');
            }
            elseif(isset($_GET['connexion']) AND !isset($_SESSION['pseudo'])){
                include('formulaire_administration/connexion.php');
            }
            else{
                echo '<h1 id="centrer_texte" style="font-color:rgb(200, 0, 0);">ERREUR !</h1>
                        <center><figure>
                            <img src="images/erreur.png" alt="LED" style="width: 30%;" />
                            <figcaption>Erreur !</figcaption>
                        </figure></center>
                        <p id="centrer_texte">Cette page n\'existe pas ! <a href="index.php">Retour a l\'accueil</a></p>';
            }
            ?>
        </div>

        <!-- Pied de page -->
        <footer class="<?php echo classe(); ?>">
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->  
    </body>
    <script src="administration.js"></script>
</html>
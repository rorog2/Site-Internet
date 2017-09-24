<?php
session_start();
require('affichage_nom.php');

function classe(){
    if(isset($_GET['inscription'])){
        $header = 'inscription';
        return '';
    }
    elseif(isset($_GET['connexion'])){
        $header = 'connexion';
        return 'petit';
    }
    elseif(isset($_GET['mdpoublie'])){
        $header = 'mot de passe oublié';
        return 'petit';
    }
    elseif(isset($_GET['changermdp'])){
        $header = 'changement mot de passe';
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
            elseif(isset($_GET['changermdp']) AND isset($_SESSION['pseudo'])){
                include('formulaire_administration/changer_mdp.php');
            }
            else{
                header('Location: administration.php?connexion');
            }
            ?>
        </div>

        <!-- Pied de page -->
        <footer class="<?php echo classe(); ?>">
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->
    <script src="jquery.js"></script>
    </body>
</html>
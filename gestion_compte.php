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
        <title>Gestion du compte<?php echo nom(); ?></title>
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
            <?php if(isset($_SESSION['pseudo'])){ ?>
                <h1 id="centrer_texte">Gestion du compte</h1>
                <p>Vous êtes connecté en tant qu<?php if($_SESSION['pseudo'] == 'admin'){ echo '\'administrateur'; } else{ echo 'e: '.$_SESSION['pseudo']; } ?>;</p>
                <?php
                if($_SESSION['pseudo'] == 'admin'){
                    require('gestion_compte/admin.php');
                }
                else{
                    require('gestion_compte/utilisateur.php');
                }
            }
            else{
                echo '<h1 id="centrer_texte"><u>Reservée au personne ayant un compte</u></h1>
                    <center><figure>
                        <img src="images/erreur.png" alt="LED" style="width: 35%;" />
                        <figcaption class="logo">ERREUR</figcaption>
                    </figure></center>';
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
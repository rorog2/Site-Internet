<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=electrons;charset=utf8', 'root', 'macedoine224371', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
//Random mdp
function random($car) {
    $string = "";
    $chaine = "abcdefghijklmnpqrstuvwxy0123456789";
    srand((double)microtime()*1000000);
    for($i=0; $i<$car; $i++) {
        $string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
}
?>

<!DOCTYPE html>
<html>
<!-- Onglet -->
    <head>
        <meta charset="utf-8" />
        <title>Electron's ique traitement...</title>
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
            <h1 id="centrer_texte">Vous allez être rediriger vers la page d'accueil</h1>
            <?php
            if(isset($_GET['connexion'])){
                $connexion = $bdd->prepare('SELECT pseudo, prenom FROM administration WHERE pseudo = :pseudo AND mdp = :mdp');
                $connexion->execute(array('pseudo' => htmlspecialchars($_POST['pseudo']), 'mdp' => htmlspecialchars($_POST['mdp'])));
                if($row = $connexion->fetch()){
                    $_SESSION['pseudo'] = $row['pseudo'];
                    $changer_mdp_oublie = $bdd->prepare('SELECT changer_mdp FROM administration WHERE pseudo = :p');
                    $changer_mdp_oublie->execute(array('p' => $_SESSION['pseudo']));
                    $un = $changer_mdp_oublie->fetch();
                    if($un['changer_mdp'] == 1){
                        echo '<script>document.location.href = "administration.php?changermdp"; </script>';
                    }
                    else{
                        header('Location: index.php');
                    }
                }
                else{
                    echo '<script>
                            alert("Vous n\'avez pas de compte chez nous ou vos information sont fausse");
                            document.location.href = "administration.php?connexion";
                        </script>';
                }
                $connexion->closeCursor();
            }
            elseif(isset($_GET['mdpoublie'])){
                $pseudo = $_POST['pseudo'];
                $email = $_POST['email'];
                if($email == '' AND $pseudo != '' AND $pseudo != 'admin'){
                    $afficher_pseudo = $bdd->prepare('SELECT pseudo FROM administration WHERE pseudo = :pseudo');
                    $afficher_pseudo->execute(array(':pseudo' => htmlspecialchars($pseudo)));
                    if($row = $afficher_pseudo->fetch()){
                        $mdp_aleatoire = random(8);
                        $maj_mdp = $bdd->prepare('UPDATE administration SET mdp = :mdp, changer_mdp = 1 WHERE pseudo = :pseudo');
                        $maj_mdp->execute(array('mdp' => $mdp_aleatoire, 'pseudo' => $pseudo));
                        echo '<script>
                                alert("Votre nouveau mot de passe est: '.$mdp_aleatoire.'");
                                document.location.href = "administration.php?connexion";
                            </script>';
                    }
                    else{
                        echo '<script>
                            alert("Vous n\'avez pas de compte chez nous");
                            document.location.href = "index.php";
                        </script>';
                    }
                    $afficher_pseudo->closeCursor();
                }
                else{
                    $afficher_email = $bdd->prepare('SELECT pseudo FROM administration WHERE pseudo = :pseudo');
                    $afficher_email->execute(array(':pseudo' => htmlspecialchars($pseudo)));
                    if($row = $afficher_email->fetch()){
                        $mdp_aleatoire = random(8);
                        $maj_mdp = $bdd->prepare('UPDATE administration SET mdp = :mdp, changer_mdp = 1 WHERE email = :email');
                        $maj_mdp->execute(array('mdp' => $mdp_aleatoire, 'email' => $email));
                    }
                    else{
                        echo '<script>
                            alert("Vous n\'avez pas de compte chez nous");
                            document.location.href = "index.php";
                        </script>';
                    }
                    $afficher_email->closeCursor();
                }
            }
            elseif(isset($_GET['inscription'])){
                $inscription = $bdd->prepare('INSERT INTO administration(pseudo, mdp, email, nom, prenom, changer_mdp) VALUES(:pseudo, :mdp, :email, :nom, :prenom, :changer_mdp)');
                $inscription->execute(array(
                    'pseudo' => $_POST['pseudo'],
                    'mdp' => $_POST['mdp'],
                    'email' => $_POST['email'],
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'changer_mdp' => 0,
                ));
                echo '<script>
                        alert("Vous êtes inscrit !");
                        document.location.href = "administration.php?connexion";
                    </script>';

                $inscription->closeCursor();
            }
            elseif(isset($_GET['changermdp'])){
                $changer_mot_de_passe = $bdd->prepare('UPDATE administration SET mdp = :mdp, changer_mdp = 0 WHERE pseudo = :pseudo');
                $changer_mot_de_passe->execute(array('mdp' => $_POST['mdp'], 'pseudo' => $_SESSION['pseudo']));
                echo '<script>
                        alert("Votre mot de passe est à jour !");
                        document.location.href = "index.php";
                    </script>';
                $changer_mot_de_passe->closeCursor();
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
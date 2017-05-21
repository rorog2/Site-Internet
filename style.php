<?php
session_start();
require('affichage_nom.php');
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
        <?php if(isset($_SESSION['pseudo']) && $_SESSION['pseudo'] == 'admin'){ ?>
            <fieldset><legend>Case a cocher</legend>
                <p>
                    Cochez les aliments que vous aimez manger :<br />
                    <input type="checkbox" name="frites" id="frites" /> <label for="frites" class="radio">Frites</label><br />
                    <input type="checkbox" name="steak" id="steak" /> <label for="steak" class="radio">Steak haché</label><br />
                    <input type="checkbox" name="epinards" id="epinards" /> <label for="epinards" class="radio">Epinards</label><br />
                    <input type="checkbox" name="huitres" id="huitres" /> <label for="huitres" class="radio">Huitres</label>
                </p>
            </fieldset>
            <fieldset><legend>Zone de texte</legend>
                <label for="style_text">Zone de texte:</label><input type="text" id="style_text" placeholder="Voici du texte" /><br /><br />
                <label for="style_textarea">Textarea:</label><textarea id="style_textarea"></textarea>
            </fieldset>
            <fieldset><legend>Bouton radio</legend>
                <p>
                    Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />
                    <input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15" class="radio">Moins de 15 ans</label><br />
                    <input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25" class="radio">15-25 ans</label><br />
                    <input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40" class="radio">25-40 ans</label><br />
                    <input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40" class="radio">Encore plus vieux que ça ?!</label>
                </p>
            </fieldset>
            <fieldset><legend>Liste déroulante</legend>
                <p>
                    <label for="pays">Dans quel pays habitez-vous ?</label><br />
                    <select name="pays" id="pays">
                        <option value="france" selected>France</option>  <!-- Selectionner par default -->
                        <option value="espagne">Espagne</option>
                        <option value="italie">Italie</option>
                        <option value="royaume-uni">Royaume-Uni</option>
                        <option value="canada">Canada</option>
                        <option value="etats-unis">États-Unis</option>
                        <option value="chine">Chine</option>
                        <option value="japon">Japon</option>
                    </select>
                </p>
            </fieldset>
            <fieldset><legend>Boutons</legend>
                <button>Bouton</button>
                <input type="submit" value="Submit" style="display:inline-block; margin-left: 3em;" />
            </fieldset>
            <fieldset><legend>Lien</legend>
                <a href="#">Je suis un lien</a>
            </fieldset>
            <fieldset><legend>Important</legend>
                <div class="important">
                    <img class="important" src="images/attention.png" alt="Important" />
                    <p class="important">Bonjour je suis bien le message important</p>
                </div>
            </fieldset>  
            <?php } 
            else{

            } ?>  
        </div>

        <!-- Pied de page -->
        <footer>
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->  
    </body>
</html>
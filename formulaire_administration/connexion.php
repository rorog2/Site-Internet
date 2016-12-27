<h1 id="centrer_texte">Connexion</h1>
<p>Vous connecter vous permettra d'avoir accés au chats, de télécharger des programmes et de participer au développement du programme de calcul en nous faisant remonter les bugs présents.</p> 
<form action="traitement.php?connexion" method="post" onsubmit="verification_connexion(); return false;">
    <fieldset>
        <legend>Connexion</legend>
        <label for="pseudo">Pseudo: </label><input type="text" name="pseudo" id="pseudo" placeholder="Pseudo..." /><br><br>
        <label for="mdp">Mot de passe: </label><input type="password" name="mdp" id="mdp" placeholder="Mot de passe..." /><br><br>
        <input type="button" onclick="verification_connexion()" value="Connexion" />
    </fieldset>
</form>
<p>Vous avez oublié votre mot de passe ? <a href="administration.php?mdpoublie">Cliquez ici...</a></p>
<p>Vous n'ete pas encore inscript ? <a href="administration.php?inscription">Inscrivez-vous...</a></p>
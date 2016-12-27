<h1 id="centrer_texte">Mot de passe oublié</h1>
<p>Vous connecter vous permettra d'avoir accés au chats, de télécharger des programmes et de participer au développement du programme de calcul en nous faisant remonter les bugs présents.</p> 
<form action="traitement.php?mdpoublie" method="post" onsubmit="verification_mdpoublie(); return false;">
    <fieldset>
        <legend>Mot de passe oublié</legend>
        <label for="pseudo">Pseudo: </label><input type="text" name="pseudo" id="pseudo" placeholder="Pseudo..." /><br><br>
        <p>OU</p>
        <label for="mdp">Email: </label><input type="email" name="email" id="email" placeholder="Email.." /><br><br>
        <input type="button" onclick="verification_mdpoublie()" value="Réinitialiser" />
    </fieldset>
</form>
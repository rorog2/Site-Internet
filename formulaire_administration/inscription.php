<h1 id="centrer_texte">Inscription</h1>
<p>Vous inscrire vous permettra d'avoir accés au chats, de télécharger des programmes et de participer au développement du programme de calcul en nous faisant remonter les bugs présents.</p> 
<form action="traitement.php?inscription" method="post" onsubmit="verification_inscription(); return false;">
    <fieldset>
        <legend>Inscription</legend>
        <label for="nom">Nom: </label><input type="text" name="nom" id="nom" placeholder="Nom..." /><br><br>
        <label for="prenom">Prénom: </label><input type="text" name="prenom" id="prenom" placeholder="Prénom..." /><br><br>
        <label for="email">Email: </label><input type="email" name="email" id="email" placeholder="Email..." /><br><br>
        <label for="pseudo">Pseudo: </label><input type="text" name="pseudo" id="pseudo" placeholder="Pseudo..." /><br><br>
        <label for="mdp">Mot de passe: </label><input type="password" name="mdp" id="mdp" placeholder="Mot de passe..." /><br><br>
        <label for="mdp2">Rétaper votre mot de passe: </label><input type="password" name="mdp2" id="mdp2" placeholder="Mot de passe..." /><br><br>
        <input type="button" onclick="verification_inscription()" value="S'inscrire" />
    </fieldset>
</form>
<h6 id="centrer_texte">Inscription</h6>
<p>Vous inscrire vous permettra d'avoir accés au chats, de télécharger des programmes et de participer au développement du programme de calcul en nous faisant remonter les bugs présents.</p> 
<form action="traitement.php?inscription" method="post" id="formulaire" onsubmit="verification_inscription(); return false;">
    <fieldset>
        <legend>Inscription</legend>
        <label for="nom">Nom: </label><input type="text" name="nom" id="nom" placeholder="Nom..." /><br><br>
        <label for="prenom">Prénom: </label><input type="text" name="prenom" id="prenom" placeholder="Prénom..." /><br><br>
        <label for="email">Email: </label><input type="email" name="email" id="email" placeholder="Email..." /><br><br>
        <label for="pseudo">Pseudo: </label><input type="text" name="pseudo" id="pseudo" placeholder="Pseudo..." /><br><br>
        <label for="mdp">Mot de passe: </label><input type="password" name="mdp" id="mdp" placeholder="Mot de passe..." /><br><br>
        <label for="mdp2">Rétaper votre mot de passe: </label><input type="password" name="mdp2" id="mdp2" placeholder="Mot de passe..." /><br><br>
        <input type="button" onclick="verification_inscription();" value="S'inscrire" />
    </fieldset>
</form>
<script>
//Vérification_inscription
function verification_inscription(){
    var formulaire = document.getElementById('formulaire'),
    nom = document.getElementById('nom').value,
    prenom = document.getElementById('prenom').value,
    email = document.getElementById('email').value,
    pseudo = document.getElementById('pseudo').value,
    mdp = document.getElementById('mdp').value,
    mdp2 = document.getElementById('mdp2').value;

    //Nom prenom
    var nom_p = nom_propre(nom);
    var prenom_p = nom_propre(prenom);

    nom = nom_p;
    prenom = prenom_p;

    //Email
    if(email == ''){
        alert('L\'adresse email n\'a pas été remplit');
        return false;
    }

    //Pseudo
    else if(pseudo.length < 5){
        alert('Le pseudo doit contenir minimum 5 caractère');
        return false;
    }

    //Mot de passe
    else if(mdp !== mdp2 && mdp !== ''){
        alert('Les 2 mot de passe ne sont pas identiques');
        return false;
    }
    else{
        formulaire.submit();
    }
}
function nom_propre(mot){
    return (mot.charAt(0).toUpperCase() + mot.substring(1).toLowerCase());
}
document.addEventListener('keypress', function(e) {
    var touche = e.keyCode;
    if(touche === 13){
        verification_inscription();
    }
});
</script>
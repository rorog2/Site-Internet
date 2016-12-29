<h1 id="centrer_texte">Changement du mot de passe</h1> 
<form action="traitement.php?changermdp" method="post" id="formulaire" onsubmit="verification_changermdp(); return false;">
    <fieldset>
        <legend>Changer mot de passe</legend>
        <label for="mdp">Mot de passe: </label><input type="password" name="mdp" id="mdp" placeholder="Mot de passe..." /><br><br>
        <label for="mdp2">Retaper mot de passe: </label><input type="password" name="mdp2" id="mdp2" placeholder="Mot de passe..." /><br><br>
        <input type="button" onclick="verification_changermdp();" value="Changer mot de passe" />
    </fieldset>
</form>
<script>
//Vérification de connexion
function verification_changermdp(){
	var formulaire = document.getElementById('formulaire'),
	mdp = document.getElementById('mdp').value,
	mdp2 = document.getElementById('mdp2').value;

	if(mdp === mdp2){
		formulaire.submit();
	}
	else{
		alert('Les 2 mot de passe ne sont pas identiques ou les champs sont vides !');
		formulaire.reset();
	}
}
</script>
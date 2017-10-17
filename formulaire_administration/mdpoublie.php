<h6 id="centrer_texte">Mot de passe oublié</h6>
<p>Vous connecter vous permettra d'avoir accés au chats, de télécharger des programmes et de participer au développement du programme de calcul en nous faisant remonter les bugs présents.</p> 
<form action="traitement.php?mdpoublie" method="post" id="formulaire" onsubmit="verification_mdpoublie(); return false;">
    <fieldset>
        <legend>Mot de passe oublié</legend>
        <p>Vous devez choisir une des 2 solution.</p>
        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo..."/><br>
        <p>OU</p>
        <input type="email" name="email" id="email" placeholder="Email..."/><br><br>
        <input type="button" onclick="verification_mdpoublie()" value="Réinitialiser" />
    </fieldset>
</form>
<script>
//Vérification de mdpoublie
function verification_mdpoublie(){
	var formulaire = document.getElementById('formulaire'),
	pseudo = document.getElementById('pseudo').value,
	email = document.getElementById('email').value;

	if((pseudo == '' && email != '') || (pseudo !== '' && email == '')){
		formulaire.submit();
	}
	else if(pseudo == '' && email == ''){
		alert('Vous devez remplir une des 2 zones de texte !');
		formulaire.reset();
	}
	else if(pseudo !== '' && email !== ''){
		alert('Vous devez remplir une des 2 zones de texte !');
		formulaire.reset();
	}
}
document.addEventListener('keypress', function(e) {
    var touche = e.keyCode;
    if(touche === 13){
    	verification_mdpoublie();
    }
});

function deac_email(){
    document.getElementById('email').disabled = true;
    document.getElementById('pseudo').disabled = false;
}

function deac_pseudo(){
    document.getElementById('pseudo').disabled = true;
    document.getElementById('email').disabled = false;
}
</script>
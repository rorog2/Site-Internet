<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>
	<script>
	function valeur(){
		var p = document.getElementById("resultat");
		if(document.getElementById('choix1').checked) {
			var resultat = document.getElementById('choix1').value;
		}
		else if(document.getElementById('choix2').checked) {
			var resultat = document.getElementById('choix2').value;
		}
		else if(document.getElementById('choix3').checked) {
			var resultat = document.getElementById('choix3').value;
		}
		p.innerText = 'Le résultat est: ' + resultat;
	}
	</script>

    <body>
		<input type=radio id=choix1 name=choix value=Choix1 checked=checked /><label for="choix1">Choix 1</label><br>
		<input type=radio id=choix2 name=choix value=Choix2 /><label for="choix2">Choix 2</label><br>
		<input type=radio id=choix3 name=choix value=Choix 3 /><label for="choix3">Choix 3</label><br>
		<input type="button" id="button" value="Valeur du bouton radio selectionner" onclick="valeur()" /><br><br>
		<p id="resultat"></p>
    </body>
</html>
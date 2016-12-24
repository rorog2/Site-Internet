<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>
	<script>
	function valeur(){
		var p = document.getElementById("resultat");
		var resultat = "";
		
		if(document.getElementById('frites').checked) {
			resultat += document.getElementById('frites').value;
		}
		else if(document.getElementById('steak').checked) {
			resultat += document.getElementById('steak').value;
		}
		else if(document.getElementById('epinards').checked) {
			resultat += document.getElementById('epinards').value;
		}
		p.innerText = 'Le résultat est: ' + resultat;
	}
	</script>

    <body>
		<input type="checkbox" name="frites" id="frites" value="frite" /> <label for="frites">Frites</label><br />
        <input type="checkbox" name="steak" id="steak" value="steak" /> <label for="steak">Steak haché</label><br />
        <input type="checkbox" name="epinards" id="epinards" value="epinards" /> <label for="epinards">Epinards</label><br />
		<input type="button" id="button" value="Valeur du bouton radio selectionner" onclick="valeur()" /><br><br>
		<p id="resultat"></p>
    </body>
</html>
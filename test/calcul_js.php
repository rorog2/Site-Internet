<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>
	<script>
	function calcul(){
		var n1 = document.getElementById("n1").value;
		var n2 = document.getElementById("n2").value;
		var p = document.getElementById("resultat");
		var resultat = parseInt(n1) + parseInt(n2);
		p.innerText = 'Le résultat est: ' + resultat;
	}
	</script>

    <body>
		<label for="n1">Nombre n°1:</label><input type="text" name="n1" id="n1" /><br>
		<label for="n2">Nombre n°2:</label><input type="text" name="n2" id="n2" /><br>
		<input type="button" id="button" value="Calculer la somme" onclick="calcul()" /><br><br>
		<p id="resultat"></p>
    </body>
</html>
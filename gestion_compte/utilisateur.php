<h4>Information personnel:</h4>
<table class="espace">
	<tr>
		<th>Pseudo</th>
		<th>Mot de passe</th>
		<th>Email</th>
		<th>Nom</th>
		<th>Prénom</th>
	</tr>
	<tr>
		<?php
		$info = $bdd->prepare('SELECT * FROM administration WHERE pseudo = :pseudo');
		$info->execute(array('pseudo' => $_SESSION['pseudo']));
		while($liste = $info->fetch()){
			echo '<td>'.$liste['pseudo'].'</td>
				<td>'.$liste['mdp'].'</td>
				<td>'.$liste['email'].'</td>
				<td>'.$liste['nom'].'</td>
				<td>'.$liste['prenom'].'</td>';
		}
		?>
	</tr>
</table>
<h4>Modification des informations personnels</h4>
<form action="gestion_compte.php?traitement" method="post">
	<fieldset>
		<legend>Choix du type de modification</legend>
		<input type="radio" name="type" value="mdp" id="mdp" /><label class="radio" for="mdp">Mot de passe</label><br />
		<input type="radio" name="type" value="email" id="email" /><label class="radio" for="email">Email</label><br />
		<input type="radio" name="type" value="nom" id="nom" /><label class="radio" for="nom">Nom</label><br />
		<input type="radio" name="type" value="prenom" id="prenom" /><label class="radio" for="prenom">Prénom</label><br />
	</fieldset>
	<fieldset>
		<legend>Modification de la donnée</legend>
		<label for="ancien">Ancienne donnée:</label><input type="text" name="ancien" id="ancien" placeholder="Ancienne donnée..." /><br><br>
		<label for="nouvelle">Nouvelle donnée:</label><input type="text" name="nouvelle" id="nouvelle" placeholder="Nouvelle donnée..." /><br><br>
		<label for="nouvelle2">Retaper la nouvelle donnée:</label><input type="text" name="nouvelle2" id="nouvelle2" placeholder="Nouvelle donnée..." />
	</fieldset>
	<fieldset>
		<legend>Validation des données</legend>
		<input type="submit" value="Valider les données" />
	</fieldset>
</form>
<h4>Suppression du compte</h4>
<form action="gestion_compte.php?delete" method="post" id="formulaire" onsubmit="delete(); return false;">
	<input type="button" onclick="delete();" value="Supprimmer mon compte" class="espace" />
</form>

<script>
function delete(){
	var formulaire = document.getElementById("formulaire");
	if(confirm("Voulez-vous vraiment supprimer votre compte ?")){
		formulaire.submit();
	}
	else{
		formulaire.reset();
	}
}
</script>

<?php
if(isset($_GET['traitement'])){
	if(isset($_POST['type'])){
		$type = $_POST['type'];
	}
	else{
		echo '<script>
			alert("Vous n\'avez rien sélectionner en type de donnée");
			document.location.href = "gestion_compte.php";
			</script>';
	}
	$ancien = $bdd->prepare('SELECT * FROM administration WHERE pseudo = :pseudo');
	$ancien->execute(array('pseudo' => $_SESSION['pseudo']));
	$ancien_table = $ancien->fetch();
	if($ancien_table[$type] == $_POST['ancien']){
		if($_POST['nouvelle'] == $_POST['nouvelle2']){
			$maj = $bdd->prepare('UPDATE administration SET '.$type.' = :donnee WHERE pseudo = :pseudo');
			$maj->execute(array(
				'donnee' => $_POST['nouvelle'],
				'pseudo' => $_SESSION['pseudo'],
			));
			header('Location: gestion_compte.php');
		}
		else{
			echo '<script>
			alert("Les 2 entrée de nouvelle donnée ne corresponde pas");
			document.location.href = "gestion_compte.php";
			</script>';
		}
	}
	else{
		echo '<script>
			alert("L\'ancienne donnée rentré ne correspond pas a la donnée présente dans nos base de donnée");
			document.location.href = "gestion_compte.php";
			</script>';
	}
}
elseif(isset($_GET['delete'])){
	$delete = $bdd->prepare('DELETE FROM administration WHERE pseudo = :pseudo');
	$delete->execute(array('pseudo' => $_SESSION['pseudo']));
	session_destroy();
	echo '<script>
	alert("Votre compte à été supprimer avec succès !");
	document.location.href = "index.php";
		</script>';
}
?>
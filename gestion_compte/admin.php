<h4>Informations personnels des utilisateurs:</h4>
<table class="espace">
	<tr>
		<th>ID</th>
		<th>Pseudo</th>
		<th>Mot de passe</th>
		<th>Email</th>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Désactiver</th>
	</tr>
	<?php
	$info = $bdd->prepare('SELECT * FROM administration');
	$info->execute();
	while($liste = $info->fetch()){
		echo '</tr><td>'.$liste['id'].'</td>
			<td>'.$liste['pseudo'].'</td>
			<td>'.$liste['mdp'].'</td>
			<td>'.$liste['email'].'</td>
			<td>'.$liste['nom'].'</td>
			<td>'.$liste['prenom'].'</td>
			<td>'.$liste['desactiver'].'</td></tr>';
	}
	?>
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
<form action="gestion_compte.php?delete" method="post" id="formulaire" onsubmit="verification_delete(); return false;">
	<fieldset>
		<legend>Supprimer un compte</legend>
		<label for="id_sup">ID:</label><input type="number" name="id_sup" id="id_sup" value="1" min="1" max="5000" />
		<input type="button" onclick="verification_delete();" value="Supprimmer" />
	</fieldset>
</form>
<h4>Désactiver ou activer un compte</h4>
<form action="gestion_compte.php?deac" method="post" id="formulaire" onsubmit="verification_delete(); return false;">
	<fieldset>
		<legend>Changer l'état d'un compte</legend>
		<label for="id_deac">ID:</label><input type="number" name="id_deac" id="id_deac" value="1" min="1" max="5000" />
		<input type="button" onclick="verification_deac;" value="Changer" />
	</fieldset>
</form>


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
	document.location.href = "index.php";
	alert("Votre compte à été supprimer avec succès !");
		</script>';
}
?>
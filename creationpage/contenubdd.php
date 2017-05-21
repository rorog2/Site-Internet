<?php
function liste($bdd){
	$result = $bdd->query("SHOW TABLES");
	echo '<option value=""> -- Choisissez -- </option>';
	while ($row = $result->fetch(PDO::FETCH_NUM)) {
		echo '<option value="'.$row[0].'">'.ucfirst($row[0]).'</option>';
	}
}

?>

<h1 id="centrer_texte">Contenu de base de données</h1>
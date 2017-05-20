<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=electrons;charset=utf8', 'root', 'macedoine224371', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

function liste($bdd){
	$result = $bdd->query("SHOW TABLES");
	echo '<option value=""> -- Choisissez -- </option>';
	while ($row = $result->fetch(PDO::FETCH_NUM)) {
		echo '<option value="'.$row[0].'">'.ucfirst($row[0]).'</option>';
	}
}

?>



<h1 id="centrer_texte">Créateur de page</h1>

<!-- Choix type -->
<fieldset> <legend>Choix du type de contenu</legend>
   <p>
       Veuillez sélectionner le type d'éléments que vous voulez insérer:<br /><br />
       <input type="radio" name="type" value="titre_h1" id="titre_h1" checked="checked" /> <label class="radio" for="titre_h1">Titre H1</label><br />
       <input type="radio" name="type" value="titre_h2" id="titre_h2" /> <label class="radio" for="titre_h2">Titre H2</label><br />
       <input type="radio" name="type" value="titre_h3" id="titre_h3" /> <label class="radio" for="titre_h3">Titre H3</label><br />
       <input type="radio" name="type" value="titre_h4" id="titre_h4" /> <label class="radio" for="titre_h4">Titre H4</label><br />
       <input type="radio" name="type" value="paragraphe" id="paragraphe" /> <label class="radio" for="paragraphe">Paragraphe</label><br />
       <input type="radio" name="type" value="attention" id="attention" /> <label class="radio" for="attention" style="color:#820000;">Paragraphe IMPORTANT</label><br />
       <input type="radio" name="type" value="image" id="image" /> <label class="radio" for="image">Image</label><br />
       <input type="radio" name="type" value="code" id="code" /> <label class="radio" for="code">Code</label><br />
       <input type="radio" name="type" value="math" id="math" /> <label class="radio" for="math">Formule mathématique</label><br /><br />
       <button onclick="display();">Choisir</button>
   </p>
</fieldset>

<!-- Choix de la base de donnée -->
<form method="post" action="creationpage" id="form_selection" onsubmit="verification_selection(); return false;">
<fieldset><legend>Sélection de la base de donnée</legend>
	<p>
		<label for="liste">Sélection: </label>
		<select name="liste" id="liste">
			<?php liste($bdd); ?>
		</select>
	</p>
</fieldset>
</form>

<!-- Titre H1 -->
<form method="post" action="creationpage?add" id="form_h1" onsubmit="verification_h1(); return false;">
<fieldset><legend>Ajout d'un titre H1</legend>
	<p>
		<label for="h1">Titre H1: </label><input type="text" name="h1" id="h1" placeholder="Entrez votre titre..." style="width:100%;" /><br /><br />
		<input type="submit" value="Envoyer" />
	</p>
</fieldset>
</form>

<!-- Titre H2 -->
<form method="post" action="creationpage?add" id="form_h2" onsubmit="verification_h2(); return false;">
<fieldset><legend>Ajout d'un titre H2</legend>
	<p>
		<label for="h2">Titre H2: </label><input type="text" name="h2" id="h2" placeholder="Entrez votre titre..." style="width:100%;" /><br /><br />
		<input type="submit" value="Envoyer" />
	</p>
</fieldset>
</form>

<!-- Titre H3 -->
<form method="post" action="creationpage?add" id="form_h3" onsubmit="verification_h3(); return false;">
<fieldset><legend>Ajout d'un titre H3</legend>
	<p>
		<label for="h1">Titre H3: </label><input type="text" name="h3" id="h3" placeholder="Entrez votre titre..." style="width:100%;" /><br /><br />
		<input type="submit" value="Envoyer" />
	</p>
</fieldset>
</form>

<!-- Titre H4 -->
<form method="post" action="creationpage?add" id="form_h4" onsubmit="verification_h4(); return false;">
<fieldset><legend>Ajout d'un titre H4</legend>
	<p>
		<label for="h1">Titre H4: </label><input type="text" name="h4" id="h4" placeholder="Entrez votre titre..." style="width:100%;" /><br /><br />
		<input type="submit" value="Envoyer" />
	</p>
</fieldset>
</form>

<!-- Paragraphe -->
<form method="post" action="creationpage?add" id="form_paragraphe" onsubmit="verification_paragraphe(); return false;">
<fieldset><legend>Ajout d'un paragraphe</legend>
	<p>
		<label for="paragraphe">Texte: </label><textarea class="paragraphe" rows="15" cols="120" id="paragraphe"></textarea><br /><br />
		<input type="submit" value="Envoyer" />
	</p>
</fieldset>
</form>

<!-- Attention-->
<form method="post" action="creationpage?add" id="form_attention" onsubmit="verification_attention(); return false;">
<fieldset><legend>Ajout d'un paragraphe attention</legend>
	<p>
		<label for="h1">Texte: </label><textarea class="paragraphe" rows="15" cols="120" id="attention"></textarea><br /><br />
		<input type="submit" value="Envoyer" />
	</p>
</fieldset>
</form>

<!-- Image -->
<form method="post" action="creationpage?add" id="form_image" onsubmit="verification_image(); return false;">
<fieldset><legend>Ajout d'une image</legend>
	<p>
		<label for="h1">Source image: </label><input type="text" name="image" id="image" placeholder="Chemin de l'image..." style="width:100%;" /><br /><br />
		<label for="h1">Sous titre: </label><input type="text" name="sous_titre_image" id="sous_titre_image" placeholder="Sous titre de l'image..." style="width:100%;" /><br /><br />
		<input type="submit" value="Envoyer" />
	</p>
</fieldset>
</form>

<!-- Code -->
<form method="post" action="creationpage?add" id="form_code" onsubmit="verification_code(); return false;">
<fieldset><legend>Ajout d'une zone de code</legend>
	<p>
		<label for="h1">Source image: </label><input type="text" name="image" id="image" placeholder="Chemin de l'image..." style="width:100%;" /><br /><br />
		<label for="h1">Sous titre: </label><input type="text" name="sous_titre_image" id="sous_titre_image" placeholder="Sous titre de l'image..." style="width:100%;" /><br /><br />
		<input type="submit" value="Envoyer" />
	</p>
</fieldset>
</form>

<!-- Formule math -->
<form method="post" action="creationpage?add" id="form_math" onsubmit="verification_math(); return false;">
<fieldset><legend>Ajout d'une formule mathématique</legend>
	<p>
		<label for="h1">Source image: </label><input type="text" name="image" id="image" placeholder="Chemin de l'image..." style="width:100%;" /><br /><br />
		<label for="h1">Sous titre: </label><input type="text" name="sous_titre_image" id="sous_titre_image" placeholder="Sous titre de l'image..." style="width:100%;" /><br /><br />
		<input type="submit" value="Envoyer" />
	</p>
</fieldset>
</form>


<script type="text/javascript">
effacer();
function effacer(){
   	document.getElementById("form_h1").style.display = 'none';
	document.getElementById("form_h2").style.display = 'none';
	document.getElementById("form_h3").style.display = 'none';
	document.getElementById("form_h4").style.display = 'none';
	document.getElementById("form_paragraphe").style.display = 'none';
	document.getElementById("form_attention").style.display = 'none';
	document.getElementById("form_image").style.display = 'none';
	document.getElementById("form_code").style.display = 'none';
	document.getElementById("form_math").style.display = 'none';
}
</script>









<!-- CODE PHP -->

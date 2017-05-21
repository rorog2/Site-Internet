<ul class="navigation">
    <h2>Menu</h2>
    <li class="navigation" onclick="index();">Accueil</li>
    <li class="navigation">Calcul</li>
    <li class="navigation">Composants</li>
    <li class="navigation">Chats</li>
    <li class="navigation">Nos logiciels</li>
    <li class="navigation">A propos</li>
    <li class="navigation" onclick="connexion();">Se connecter</li>
    <li class="navigation" onclick="inscription();">Inscription</li>
</ul>
<p>Membres connecter:</p>


<script type="text/javascript">
function index(){
	document.location.href = 'index.php';
}

function connexion(){
	document.location.href = 'administration.php?connexion';
}


function inscription(){
	document.location.href = 'administration.php?inscription';
}


</script>
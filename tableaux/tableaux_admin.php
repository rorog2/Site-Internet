<ul class="navigation">
    <h2>Menu</h2>
    <li class="navigation" onclick="index();">Accueil</li>
    <li class="navigation" onclick="calcul();">Calcul</li>
    <li class="navigation" onclick="composants();">Composants</li>
    <li class="navigation" onclick="chat();">Chat</li>
    <li class="navigation" onclick="gestion_compte();">Gestion du compte</li>
    <li class="navigation" onclick="liste();">Liste des choses a faire</li>
    <li class="navigation" onclick="gpio();">Controle du port GPIO</li>
    <li class="navigation" onclick="cryptage();">Crypter .htpasswd</li>
    <li class="navigation" onclick="creation();">Gestion du site</li>
    <li class="navigation" onclick="style_css();">Style</li>
    <li class="navigation" onclick="logiciels();">Nos logiciels</li>
    <li class="navigation" onclick="apropos();">A propos</li>
    <li class="navigation" onclick="deconnection();">Déconnection</li>
</ul>
<p>Membres connecter:</p>

<script type="text/javascript">
    function index(){
        document.location.href = 'index.php';
    }
    function calcul(){
        document.location.href = 'calcul/index.php';
    }
    function composants(){
        document.location.href = 'composants/index.php';
    }
    function chat(){
        document.location.href = 'chat.php';
    }
    function gestion_compte(){
        document.location.href = 'gestion_compte.php';
    }
    function liste(){
        document.location.href = 'liste/index.php';
    }
    function gpio(){
        document.location.href = 'gpio.php';
    }
    function cryptage(){
        document.location.href = 'cryptage.php';
    }
    function creation(){
        document.location.href = 'creationpage.php';
    }
    function style_css(){
        document.location.href = 'style.php';
    }
    function logiciels(){
        document.location.href = 'logiciels.php';
    }
    function apropos(){
        document.location.href = 'apropos.php';
    }
    function deconnection(){
        document.location.href = 'administration.php?deconnection';
    }
</script>

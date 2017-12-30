<ul class="navigation">
    <h2>Menu</h2>
    <li class="navigation" onclick="index();">Accueil</li>  <!-- Normal -->
    <li class="navigation" onclick="calcul();">Calcul</li>  <!-- Normal -->
    <li class="navigation" onclick="composants();">Composants</li>  <!-- Normal -->
    <?php if(isset($_SESSION['pseudo'])){ ?>
    <li class="navigation" onclick="chat();">Chat</li>  <!-- Connecté -->
    <li class="navigation" onclick="gestion_compte();">Gestion du compte</li>  <!-- Connecté-->
    <?php } ?>
    <?php if(isset($_SESSION['pseudo']) && $_SESSION['pseudo'] == 'admin'){ ?>
    <li class="navigation" onclick="liste();">Liste des choses a faire</li>  <!-- Admin -->
    <li class="navigation" onclick="gpio();">Controle du port GPIO</li>  <!-- Admin -->
    <li class="navigation" onclick="cryptage();">Crypter .htpasswd</li>  <!-- Admin -->
    <li class="navigation" onclick="creation();">Gestion du site</li>  <!-- Admin -->
    <li class="navigation" onclick="style_css();">Style</li>  <!-- Admin -->
    <li class="navigation" onclick="aide();">Aide</li>  <!-- Admin -->
    <?php } ?>
    <li class="navigation" onclick="logiciels();">Nos logiciels</li>  <!-- Normal -->
    <li class="navigation" onclick="apropos();">A propos</li>  <!-- Normal -->
    <?php if(isset($_SESSION['pseudo'])){ ?>
    <li class="navigation" onclick="deconnection();">Déconnection</li>  <!-- Connecté -->
    <?php } ?>
    <?php if(!isset($_SESSION['pseudo'])){ ?>
    <li class="navigation" onclick="connexion();">Se connecter</li>
    <li class="navigation" onclick="inscription();">Inscription</li>
    <?php } ?>
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
    function aide(){
        document.location.href = 'https://aide.electronsique.fr';
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
    function connexion(){
        document.location.href = 'administration.php?connexion';
    }
    function inscription(){
        document.location.href = 'administration.php?inscription';
    }
</script>

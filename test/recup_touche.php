<!DOCTYPE html>
<html>
<!-- Onglet -->
    <head>
        <meta charset="utf-8" />
        <title>Electron's ique</title>
        <link rel="icon" type="image/png" href="../images/logo.png" />
        <link rel="stylesheet" type="text/css" href="../css/style_pc.css" />
    </head>

<!-- Corps de la page -->
    <body>
        <!-- Tete de page -->
        <header>
            <img src="../images/logo.png" alt="Logo du site" id="logo_baniere" />
            <h1 style="display: inline-block;">Electron's ique</h1>
        </header>

        <!-- Navigation -->
        <nav>
        </nav>
        <nav class="dessous">
            <p>Nombre de visiteur: </p>
            <p>Membres connecté: </p>
        </nav>

        <!-- Page -->
        <div class="general">
            <p>
                <input id="field" type="text" />
            </p>

            <table>
                <tr>
                    <td>keydown</td>
                    <td id="down"></td>
                </tr>
                <tr>
                    <td>keypress</td>
                    <td id="press"></td>
                </tr>
                <tr>
                    <td>keyup</td>
                    <td id="up"></td>
                </tr>
            </table>

            <script>
                var field = document.getElementById('field'),
                    down = document.getElementById('down'),
                    press = document.getElementById('press'),
                    up = document.getElementById('up');

                document.addEventListener('keydown', function(e) {
                    down.innerHTML = e.keyCode;
                });

                document.addEventListener('keypress', function(e) {
                    press.innerHTML = e.keyCode;
                });

                document.addEventListener('keyup', function(e) {
                    up.innerHTML = e.keyCode;
                });
            </script>
        </div>

        <!-- Pied de page -->
        <footer>
            <p id="centrer_texte" class="footer">Vous pouvez nous retrouver sur les réseaux sociaux !</p>
        </footer>
<!-- Fin de la page -->  
    </body>
    <script src="script.js"></script>
</html>
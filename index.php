<?php
include "configuration.php";
require CHEMIN_ACCESSEUR . "ClicDAO.php";
ClicDAO::enregistrerVisite($_SERVER);

include "entete.php";
?>
            <script type="plain/text" id="barre-recherche-html">
                <p>
                    Une idée pour un projet mais des doutes sur le langage à adopter ? <br>
                    Which Language vous aide à trouver le langage de programmation qui vous correspond.
                 </p>
                <div class="recherche-simple">
                    <form method="GET" action="traitement-recherche-simple.php" >
                        <!-- <label for="recherche">Recherche:</label> -->
                        <input type="text" name="recherche" placeholder="mots-clés: nom, domaine, type ...">
                        <input type="submit" name="action-recherche-simple" value="Rechercher">
                    </form>
                    <p>ou faites une <a href="recherche-avancee.php">recherche avancée</a></p>
                </div>
                <div id="langages-accueil">
                    <div><img src="img/java.png"></div>
                    <div><img src="img/js.png"></div>
                    <div><img src="img/c++.png"></div>
                    <div><img src="img/csharp.png"></div>
                    <div><img src="img/ruby.png"></div>
                </div>
            </script>
            <script defer>
                let rechercheDiv = document.querySelector("#barre-recherche-html");
                let header = document.querySelector("header");

                header.innerHTML += rechercheDiv.innerHTML;
                header.style.minHeight = 100 + "%";
            </script>
        </div>
    </body>
</html>
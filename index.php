<?php
include "configuration.php";
require CHEMIN_ACCESSEUR . "ClicDAO.php";
ClicDAO::enregistrerVisite($_SERVER);

include "entete.php";
?>
            <script type="plain/text" id="barre-recherche-html">
                <div class="recherche-simple">
                    <form method="GET" action="traitement-recherche-simple.php" >
                        <!-- <label for="recherche">Recherche:</label> -->
                        <input type="text" name="recherche" placeholder="titre, auteur, date, ...">
                        <input type="submit" name="action-recherche-simple" value="Rechercher">
                    </form>
                    <p>ou faites une <a href="recherche-avancee.php">recherche avancée</a></p>
                </div>
            </script>
            <script defer>
                let rechercheDiv = document.querySelector("#barre-recherche-html");
                let header = document.querySelector("header");

                header.style.minHeight = 100 + "%";
                header.innerHTML += rechercheDiv.innerHTML;
            </script>
        </div>
    </body>
</html>
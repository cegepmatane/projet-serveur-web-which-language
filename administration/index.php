<?php
    include "../entete.php";

?>
        <div id="contenu-page">
            <div id="bouton-retour">
                <a class="btn" href="../liste-langages.php"><h2> < Quitter section ADMIN</h2></a>
            </div>
            <!--DASHBOARD-->
            <h2>Dashboard</h2>
            <section id="dashboard">
                <div class="vignette" style="background-color: darkgrey;">
                    <a href="liste-langages.php"><p>Liste des langages de programmation</p></a>
                    <img class="img-fluide" src="../img/screen-langages.png" alt="Langage Ruby"/>
                </div>

                <div class="vignette" style="background-color: darkslateblue;">
                    <p>Pensée du jour</p>
                    <div id="pensee-du-jour">
                        <p>"Il faut secouer la mite de vos habits" - Le Sage</p>
                    </div>
                </div>

               
                <div class="vignette" style="background-color: darkgrey;">
                    <a href="contenu-stats.php"><p>Statistiques de contenu</p></a>
                    <img class="img-fluide" src="../img/screen-contenu.png" alt="graphique tarte"/>
                </div>
                

                <div class="vignette" style="background-color: darkslateblue;">
                    <a href="visites-stats.php"><p>Statistiques de visites</p></a>
                    <img class="img-fluide" src="../img/screen-visites.png" alt="tableau visites"/>
                </div>

                <div class="vignette" style="background-color: darkgrey;">
                    <p>Humeur du jour</p>
                    <p>C'est une bien belle journée mon ami</p>
                </div>

                <div class="vignette" style="background-color: darkgray;">
                    <p>Image du jour</p>
                    <img class="img-fluide" src="../img/img-jour.jpg" alt="Pastèque d'eau"/>
                </div>
            </section>
<?php   include "../pied-page.php"; ?>
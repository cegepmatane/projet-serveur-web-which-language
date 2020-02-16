<?php
    include("connexion.php");

    $REQUETE_LISTE_LANGAGES = "SELECT id, nom, auteur, date, description, utilisation from langage;";

    $set_utf=$connexion->prepare("SET NAMES UTF8"); 
    $set_utf->execute(); 

    $requete = $connexion->prepare($REQUETE_LISTE_LANGAGES);
    $requete->execute();
    $listeLangages = $requete->fetchAll();

    //Affichage brut des données
    //print_r($listeLangages);

?>

<html lang="fr" xml:lang="fr">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Liste des langages de programmation</title>
        <link rel="stylesheet" type="text/css" href="../css/liste.css">
        <script>
        function clicItem(idItem)
        {
            var url = "detail-langage.php?id="+ idItem;
            console.log(url);
            window.location = url;
        }
        </script>
    </head>
    <body>
        <div id="contenu-page">
            <header>
                <h1>Liste des langages de programmation</h1>
            </header>
            <div id="bouton-retour">
                <a class="btn" href="../liste-langages.php"><h2> < Quitter section ADMIN</h2></a>
            </div>
            <h2>Liste des langages</h2>
            <div id="liste-item">
                <?php
                    foreach($listeLangages as $langage)
                    {
                ?>

                <div class="item-box" onclick="clicItem(<?= $langage['id'] ?>)">
                    <!-- <a href="detail-langage.php?id="> -->
                        <div class="item-img"></div>
                    <!-- </a> -->
                    <div class="item-text">
                        <h3 class="item-name"><?= $langage["nom"] ?></h3>
                        <p class="item-date"><?= $langage["date"] ?></p>
                        <p class="item-desc"><?= $langage["description"] ?></p>
                    </div>
                    <div class="bouton-action bouton-modifier">
                        <a class="btn" href="modifier-langage.php"><h2>Modifier</h2></a>
                    </div>
                    <div class="bouton-action bouton-supprimer">
                        <a class="btn" href="supprimer-langage.php"><h2>Supprimer</h2></a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="bouton-action bouton-ajouter">
                <a class="btn" href="ajouter-langage.php"><h2 style="color: black;">+ Ajouter un langage</h2></a>
            </div>
            <footer>
                &copy;Hy-Vong 2019
            </footer>
        </div>
    </body>
</html>
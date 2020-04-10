<?php
    include ("../configuration.php");
    require CHEMIN_ACCESSEUR . "LangageDAO.php";
    $listeLangages = LangageDAO::listerLangages();
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
                        <a class="btn" href="modifier-langage.php?id=<?= $langage["id"] ?>"><h2>Modifier</h2></a>
                    </div>
                    <div class="bouton-action bouton-supprimer">
                        <a class="btn" href="supprimer-langage.php?id=<?= $langage["id"] ?>"><h2>Supprimer</h2></a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="bouton-action bouton-ajouter">
                <a class="btn" href="ajouter-langage.php"><h2>+ Ajouter un langage</h2></a>
            </div>
            <footer>
                &copy;Hy-Vong 2019
            </footer>
        </div>
    </body>
</html>
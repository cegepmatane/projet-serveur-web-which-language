<?php
    require "../configuration.php";
    require CHEMIN_ACCESSEUR . "LangageDAO.php";

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $langage = LangageDAO::lireLangage($id);

    include "../entete.php";
?>
        <div id="contenu-page">
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <div class="item-box-detail">
                <div class="detail item-text">
                    <h3 class="item-name"><?= $langage['nom'] ?></h3>
                    <h4>Auteur(s)</h4>
                    <p class="item-author"><?= $langage["auteur"] ?></p>
                    <h4>Première version</h4>
                    <p class="item-date"><?= $langage["date"] ?></p>
                    <h4>Description</h4>
                    <p class="item-desc"><?= $langage['description'] ?></p>
                    <h4>Utilisation</h4>
                    <p class="item-util"><?= $langage["utilisation"] ?></p>
                </div>
                <div class="detail">
                    <img src="../img/<?= $langage["illustration"] ?>" class="fluide"/>
                </div>
            </div>
<?php   include "../pied-page.php"; ?>
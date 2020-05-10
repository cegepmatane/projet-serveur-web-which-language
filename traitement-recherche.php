<?php
require "configuration.php";
require CHEMIN_ACCESSEUR . "LangageDAO.php";

include "entete.php";

//Si on atterri sur la page à partir d'un formulaire de recherche
if(isset($_GET['action-rechercher']) && !empty($_GET))
{
    $recherche = $_GET['recherche'];
    $resultats = LangageDAO::rechercherSimple($recherche);
    //print_r($resultats);
    if(empty($resultats))
    {
        ?>
        <h2>Il n'y a aucun résultat pour la recherche : <?= $recherche ?></h2>
        <?php
    }
}
?>

<div id="liste-item">
    <?php
        foreach($resultats as $resultat)
        {
    ?>

    <div class="item-box" onclick="clicItem(<?= $resultat['id'] ?>)">
        <!-- <a href="detail-langage.php?id="> -->
            <div class="item-img"></div>
        <!-- </a> -->
        <div class="item-text">
            <img class="item-mini" src="mini/mini-<?= $resultat['illustration'] ?>" alt="mini-img-langage"/>
            <h3 class="item-name"><?= $resultat["nom"] ?></h3>
            <p class="item-date"><?= $resultat["date"] ?></p>
            <p class="item-desc"><?= $resultat["description"] ?></p>
        </div>
    </div>
    <?php
        }
    ?>
    <script>
    function clicItem(idItem)
    {
        var url = "detail-langage.php?id="+ idItem;
        console.log(url);
        window.location = url;
    }
    </script>
</div>


<?php include "pied-page.php" ?>
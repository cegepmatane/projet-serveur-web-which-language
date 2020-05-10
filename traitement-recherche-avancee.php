<?php
require "configuration.php";
require CHEMIN_ACCESSEUR . "LangageDAO.php";

include "entete.php";

$resultats = array();

$filtresRechercheAvancee = array();
$filtresRechercheAvancee['nom'] = FILTER_SANITIZE_ENCODED;
$filtresRechercheAvancee['auteur'] = FILTER_SANITIZE_ENCODED;
$filtresRechercheAvancee['date'] = FILTER_SANITIZE_NUMBER_INT;
$filtresRechercheAvancee['description'] = FILTER_SANITIZE_ENCODED;
$filtresRechercheAvancee['utilisation'] = FILTER_SANITIZE_ENCODED;

$recherche = filter_input_array(INPUT_GET, $filtresRechercheAvancee);

$conditions = array();
if(!empty($recherche['nom']))
{
    $conditions[ ] =  " nom LIKE '%".$recherche["nom"]."%' ";
}
if(!empty($recherche['auteur']))
{
    $conditions[ ] =  " auteur LIKE '%".$recherche["auteur"]."%' ";
}
if(!empty($recherche['date']))
{
    $conditions[ ] =  " date LIKE '%".$recherche["date"]."%' ";
}
if(!empty($recherche['description']))
{
    $conditions[ ] =  " description LIKE '%".$recherche["description"]."%' ";
}
if(!empty($recherche['utilisation']))
{
    $conditions[ ] =  " utilisation LIKE '%".$recherche["utilisation"]."%' ";
}
if(!empty($conditions))
{
    $message = "SELECT id, nom, auteur, date, description, utilisation, illustration FROM langage WHERE ";
    $message = $message . implode(' AND ', $conditions);

    $resultats = LangageDAO::rechercherAvancee($message);
}

//Afficher le nombre de résultats
?>

<h2>Il y a <?= sizeof($resultats); ?> résultat(s)</h2>

<?php

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
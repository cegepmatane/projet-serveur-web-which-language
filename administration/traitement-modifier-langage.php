<?php

$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/which-language/img/";
$illustration = $_FILES['illustration']['name'];

$fichierDestination = $repertoireIllustration . $illustration;
$fichierSource = $_FILES['illustration']['tmp_name'];

move_uploaded_file($fichierSource, $fichierDestination);

require "../configuration.php";
require CHEMIN_ACCESSEUR . 'LangageDAO.php';

$filtresModifLangage = array();
$filtresModifLangage['id'] = FILTER_SANITIZE_NUMBER_INT;
$filtresModifLangage['nom'] = FILTER_SANITIZE_STRING;
$filtresModifLangage['auteur'] = FILTER_SANITIZE_STRING;
$filtresModifLangage['date'] = FILTER_SANITIZE_NUMBER_INT;
$filtresModifLangage['description'] = FILTER_SANITIZE_STRING;
$filtresModifLangage['utilisation'] = FILTER_SANITIZE_STRING;

$langage = filter_input_array(INPUT_POST, $filtresModifLangage);
$langage['illustration'] = $illustration;

$reussiteModif = LangageDAO::modifierLangage($langage);

include "../entete.php";
?>
        <div id="contenu-page">
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <?php

            if($reussiteModif)
            {
            ?>
                <h2>Votre film a été modifié dans la base de données!</h2>
            <?php
            }

            ?>
<?php   include "../pied-page.php"; ?>
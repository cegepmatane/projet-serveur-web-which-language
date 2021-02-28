<?php

require "../configuration.php";
require CHEMIN_ACCESSEUR . 'LangageDAO.php';

$filtresSupprLangage = array();
$filtresSupprLangage['id'] = FILTER_SANITIZE_NUMBER_INT;
$filtresSupprLangage['nom'] = FILTER_SANITIZE_ENCODED;

$langage = filter_input_array(INPUT_POST, $filtresSupprLangage);

$reussiteSuppression = LangageDAO::supprimerLangage($langage);

include "../entete.php";
?>
        <div id="contenu-page">
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <?php

            if($reussiteSuppression)
            {
            ?>
                <h2>Votre film a été supprimé de la base de données!</h2>
            <?php
            }

            ?>
<?php   include "../pied-page.php"; ?>
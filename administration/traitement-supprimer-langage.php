<?php

require "../configuration.php";
require CHEMIN_ACCESSEUR . 'LangageDAO.php';

$filtresSupprLangage = array();
$filtresSupprLangage['id'] = FILTER_SANITIZE_NUMBER_INT;
$filtresSupprLangage['nom'] = FILTER_SANITIZE_ENCODED;

$langage = filter_input_array(INPUT_POST, $filtresSupprLangage);

$reussiteSuppression = LangageDAO::supprimerLangage($langage);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Suppression d'un langage</title>
        <link rel="stylesheet" type="text/css" href="../css/liste.css">
    </head>
    <body>
        <div id="contenu-page">
            <header>
                <h1>Suppression du langage <?=$langage['nom']?></h1>
            </header>
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
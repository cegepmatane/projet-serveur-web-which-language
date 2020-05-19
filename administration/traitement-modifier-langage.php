<?php

$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/projet-serveur-web-2020-Emustle/img/";
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

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modification d'un langage</title>
        <link rel="stylesheet" type="text/css" href="../css/liste.css">
    </head>
    <body>
        <div id="contenu-page">
            <header>
                <h1>Modification du langage <?=$langage['nom']?></h1>
            </header>
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
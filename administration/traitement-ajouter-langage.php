<?php

$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/projet-serveur-web-2020-Emustle/img/";
$illustration = $_FILES['illustration']['name'];

$fichierDestination = $repertoireIllustration . $illustration;
$fichierSource = $_FILES['illustration']['tmp_name'];

move_uploaded_file($fichierSource, $fichierDestination);

require "../configuration.php";
require CHEMIN_ACCESSEUR . "LangageDAO.php";

$filtresAjoutLangage = array();
$filtresAjoutLangage["nom"] = FILTER_SANITIZE_STRING;
$filtresAjoutLangage["auteur"] = FILTER_SANITIZE_STRING;
$filtresAjoutLangage["date"] = FILTER_SANITIZE_NUMBER_INT;
$filtresAjoutLangage["description"] = FILTER_SANITIZE_STRING;
$filtresAjoutLangage["utilisation"] = FILTER_SANITIZE_STRING;

$langage = filter_input_array(INPUT_POST, $filtresAjoutLangage);
$langage["illustration"] = $illustration;

$reussiteAjout = LangageDAO::ajouterLangage($langage);

//Transformer l'illustration en miniature
require_once '../lib/simpleimage/SimpleImage.php'; 

$listeLangages = LangageDAO::listerLangages();
$image = new SimpleImage();

foreach($listeLangages as $langage)
{
    $image->load('../img/'.$langage['illustration']);
    $image->resizeToWidth(100);
    $image->save('../mini/mini-'.$langage['illustration']);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajout d'un langage</title>
        <link rel="stylesheet" type="text/css" href="../css/liste.css">
    </head>
    <body>
        <div id="contenu-page">
            <header>
                <h1>Ajout d'un langage <?=$langage['nom']?></h1>
            </header>
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <?php

            if($reussiteAjout)
            {
            ?>
                <h2>Votre film a été ajouté dans la base de données!</h2>
            <?php
            }

            ?>
<?php   include "../pied-page.php"; ?>
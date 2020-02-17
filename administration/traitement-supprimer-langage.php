<?php

include("connexion.php");

$id = $_POST["id"];
$nom = $_POST["nom"];

$MESSAGE_SUPPRESSION_LANGAGE = "DELETE FROM langage WHERE id=".$id.";";
                            
$requete = $connexion->prepare($MESSAGE_SUPPRESSION_LANGAGE);
$requete->execute();

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
                <h1>Suppression du langage <?=$nom?></h1>
            </header>
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <?php

            $reussiteSuppression = $requete;
            if($reussiteSuppression)
            {
            ?>
                <h2>Votre film a été supprimé de la base de données!</h2>
            <?php
            }

            ?>
            <footer>
                &copy;Hy-Vong 2019
            </footer>
        </div>
    </body>
</html> 
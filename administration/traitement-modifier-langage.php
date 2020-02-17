<?php

$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/projet-serveur-web-2020-Emustle/img/";
$illustration = $_FILES['illustration']['name'];

$fichierDestination = $repertoireIllustration . $illustration;
$fichierSource = $_FILES['illustration']['tmp_name'];

move_uploaded_file($fichierSource, $fichierDestination);

include("connexion.php");

$id = $_POST["id"];
$nom = $_POST["nom"];
$auteur = $_POST["auteur"];
$date =$_POST["date"];
$description = $_POST["description"];
$utilisation = $_POST["utilisation"];

$MESSAGE_MODIF_LANGAGE = "UPDATE langage SET nom='".$nom."', auteur='".$auteur."', date='".$date."', description='".$description."', utilisation='".$utilisation."', illustration='".$illustration."' WHERE id=".$id.";";
                            
$requete = $connexion->prepare($MESSAGE_MODIF_LANGAGE);
$requete->execute();

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
                <h1>Modification du langage <?=$nom?></h1>
            </header>
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <?php

            $reussiteModif = $requete;
            if($reussiteModif)
            {
            ?>
                <h2>Votre film a été modifié dans la base de données!</h2>
            <?php
            }

            ?>
            <footer>
                &copy;Hy-Vong 2019
            </footer>
        </div>
    </body>
</html> 
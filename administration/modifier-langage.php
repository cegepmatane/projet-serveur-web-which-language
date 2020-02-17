<?php
include ("connexion.php");

$id = $_GET["id"];

$MESSAGE_SQL_LANGAGE = "SELECT nom, auteur, date, description, utilisation, illustration FROM langage WHERE id=".$id.";";

$requete = $connexion->prepare($MESSAGE_SQL_LANGAGE);
$requete->execute();
$langage = $requete->fetch();
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
                <h1>Modification du langage <?=$langage["nom"]?></h1>
            </header>
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <section id="contenu">
                <form class="film" action="traitement-modifier-langage.php" method="POST" enctype="multipart/form-data">
                    <div class="champ">
                        <label for="id"></label>
                        <input type="text" id="id" name="id" value="<?= $id ?>" hidden>
                    </div>
                    <div class="champ">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" value="<?= $langage["nom"]; ?>" required>
                    </div>
                    <div class="champ">
                        <label for="auteur">Auteur</label>
                        <input id="auteur" name="auteur" value="<?= $langage["auteur"]; ?>" required></input>
                    </div>
                    <div class="champ">
                        <label for="date">Année de première version</label>
                        <input type="number" id="date" name="date" value="<?= $langage["date"]; ?>" required>
                    </div>
                    <div class="champ">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" required></textarea>
                    </div>
                    <div class="champ">
                        <label for="utilisation">Utilisation</label>
                        <textarea type="text" id="utilisation" name="utilisation" required></textarea>
                    </div>
                    <div class="champ">
                        <label for="illustration">Illustration</label>
                        <input type="file" id="illustration" name="illustration" required>
                    </div>
                    <input type="submit" value="Enregsitrer">
                </form>
            </section>
            <footer>
                &copy;Hy-Vong 2019
            </footer>
        </div>
    </body>
</html> 
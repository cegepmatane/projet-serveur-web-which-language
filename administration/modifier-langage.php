<?php
    require "../configuration.php";
    require CHEMIN_ACCESSEUR . "LangageDAO.php";

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $langage = LangageDAO::lireLangage($id);

    include "../entete.php";
?>

<!DOCTYPE html>
<html>
        <div id="contenu-page">
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <section id="contenu">
                <form class="formulaire-modification" action="traitement-modifier-langage.php" method="POST" enctype="multipart/form-data">
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
                    <input type="submit" value="Modifier">
                </form>
            </section>
<?php   include "../pied-page.php"; ?>
<?php
    require "../configuration.php";
    require CHEMIN_ACCESSEUR . "LangageDAO.php";

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $langage = LangageDAO::lireLangage($id);
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
                <h1>Suppression du langage <?=$langage["nom"]?></h1>
            </header>
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <section id="contenu">
                <h2 style="color: red;">VOUS VOUS APPRÊTEZ À SUPPRIMER LE LANGAGE <?= $langage["nom"]?> ?</h2>
                <h3 style="color: red;"> Si vous n'êtes pas sûr, veuillez retourner à la page précédente</h3>
                <form class="formulaire-suppression" action="traitement-supprimer-langage.php" method="POST" enctype="multipart/form-data">
                    <div class="champ">
                        <label for="id"></label>
                        <input type="text" id="id" name="id" value="<?= $langage['id'] ?>" hidden>
                    </div>
                    <div class="champ">
                        <label for="nom"></label>
                        <input type="text" id="nom" name="nom" value="<?= $langage['nom'] ?>" hidden>
                    </div>
                    <input type="submit" value="Supprimer">
                </form>
            </section>
            <footer>
                &copy;Hy-Vong 2019
            </footer>
        </div>
    </body>
</html> 
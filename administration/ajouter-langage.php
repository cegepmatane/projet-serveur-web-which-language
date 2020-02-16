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
                <h1>Ajout d'un langage</h1>
            </header>
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <section>
                <form class="formulaire-ajout" action="traitement-ajouter-langage.php" method="POST" enctype="multipart/form-data">
                    <div class="champ">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom">
                    </div>
                    <div class="champ">
                        <label for="auteur">Auteur</label>
                        <textarea id="auteur" name="auteur"></textarea>
                    </div>
                    <div class="champ">
                        <label for="date">Année de première version</label>
                        <input type="number" id="date" name="date">
                    </div>
                    <div class="champ">
                        <label for="description">Description</label>
                        <textarea id="description" name="description"></textarea>
                    </div>
                    <div class="champ">
                        <label for="utilisation">Utilisation</label>
                        <textarea type="text" id="utilisation" name="utilisation"></textarea>
                    </div>
                    <div class="champ">
                        <label for="illustration">Illustration</label>
                        <input type="file" id="illustration" name="illustration">
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
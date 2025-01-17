<?php
    include "../configuration.php";
    include "../entete.php";
?>
    <body>
        <div id="contenu-page">
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Liste des langages</h2></a>
            </div>
            <section>
                <form class="formulaire-ajout" action="traitement-ajouter-langage.php" method="POST" enctype="multipart/form-data">
                    <div class="champ">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="champ">
                        <label for="auteur">Auteur</label>
                        <textarea id="auteur" name="auteur" required></textarea>
                    </div>
                    <div class="champ">
                        <label for="date">Année de première version</label>
                        <input type="number" id="date" name="date" required>
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
                        <label for="categorie">Catégorie</label>
                        <input type="text" id="categorie" name="categorie" required>
                    </div>
                    <div class="champ">
                        <label for="utilisateurs">Utilisateurs</label>
                        <input type="number" id="utilisateurs" name="utilisateurs" required>
                    </div>
                    <div class="champ">
                        <label for="illustration">Illustration</label>
                        <input type="file" id="illustration" name="illustration" required>
                    </div>
                    <input type="submit" value="Enregistrer">
                </form>
            </section>
<?php   include "../pied-page.php"; ?>
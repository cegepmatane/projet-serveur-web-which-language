<?php include "entete.php" ?>
<section id="recherche-avancee">
    <h2>Recherche avancée</h2>
    <form method="GET" action="traitement-recherche-avancee.php" >
        <div class="champ">
            <label for="nom">Nom du langage:</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div class="champ">
            <label for="auteur">Auteur:</label>
            <textarea id="auteur" name="auteur"></textarea>
        </div>
        <div class="champ">
            <label for="date">Année de première version:</label>
            <input type="number" id="date" name="date">
        </div>
        <div class="champ">
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div class="champ">
            <label for="utilisation">Utilisation:</label>
            <textarea type="text" id="utilisation" name="utilisation"></textarea>
        </div>
        <input type="submit" name="action-recherche-avancee" value="Rechercher">
    </form>
</section>
<?php include "pied-page.php" ?>
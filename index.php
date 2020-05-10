<?php include ("entete.php"); ?>
    <div class="recherche-simple">
        <form method="GET" action="traitement-recherche-simple.php" >
            <label for="recherche">Recherche:</label>
            <input type="text" name="recherche" placeholder="titre, auteur, date, ...">
            <input type="submit" name="action-recherche-simple" value="Valider">
        </form>
        <p>ou faites une <a href="recherche-avancee.php">recherche avancée</a></p>
    </div>
    <h2><a href="inscription-1.php">Inscrivez-vous dès maintenant</a></h2>
<?php include ("pied-page.php"); ?>
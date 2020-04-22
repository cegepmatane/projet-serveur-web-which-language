<section id="authentification">
    <h2>Authentification</h2>
    <form action="membre.php" method="POST">
        <div id="">
            <label for="pseudonyme">Pseudonyme</label>
            <input type="text" name="pseudonyme" placeholder="ex: Mickey"/>
        </div>
        <div id="">
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" name="mot_de_passe"/>
        </div>
        <input type="submit" name="action-connexion" value="Connectez-vous"/>
    </form>
    <h3>Pas encore de compte ? <a href="inscription-1.php">Créez-en un maintenant</a></h3>
</section>
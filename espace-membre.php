<section id="espace-membre">
    <h2>Bonjour <?= $membre['pseudonyme'] ?> !</h2>
    <div class="conteneur-avatar">
        <img class="avatar" src="img/avatars/<?= $membre['avatar'] ?>">
    </div>
    <div id="infos-membre" style="margin: auto; border: solid black 3px; width: 60%;">
        <h3>Identifiants</h3>
        <div id="identifiants-membre">
            <ul>
                <li>Courriel</li>
                <li>pseudonyme</li>
            </ul>
            <ul>
                <li><?= $membre['courriel'] ?></li>
                <li><?= $membre['pseudonyme'] ?></li>
            </ul>
        </div>
        <h3>Coordonnées</h3>
        <div id="coordonnees-membre">
            <ul>
                <li>Adresse</li>
                <li>Ville</li>
                <li>Pays</li>
                <li>Cellulaire</li>
            </ul>
            <ul>
                <li><?= $membre['adresse'] ?></li>
                <li><?= $membre['ville'] ?></li>
                <li><?= $membre['pays'] ?></li>
                <li><?= $membre['cellulaire'] ?></li>
            </ul>
        </div>
    </div>
    <a href="traitement-deconnexion.php">Déconnexion</a>
</section>
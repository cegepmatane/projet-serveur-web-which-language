<?php include ("entete.php");  ?>
<section id="inscription">
    <h2>Inscription - Identifiants (1/3)</h2>
    <form action="inscription-2.php" method="POST">
        <div>
            <label for="courriel">*Courriel: </label>
            <input type="text" name="courriel" placeholder="ex: mickey@gmail.com" required/>
        </div>
        <div>
            <label for="pseudonyme">*Pseudonyme: </label>
            <input type="text" name="pseudonyme" placeholder="ex: Mickey" required/>
        </div>
        <div>
            <label for="mot_de_passe">*Mot de passe: </label>
            <input type="password" name="mot_de_passe" required/>
        </div>
        <input type="submit" name="valider-identifiants" value="Suivant"/>
        <p style="font-style: italic; font-size: 9pt;">Les champs précédés d'une astérisque (*) sont obligatoires</p>
    </form>
</section>
<?php include ("pied-page.php"); ?>
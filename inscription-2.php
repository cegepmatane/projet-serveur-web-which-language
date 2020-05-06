<?php
include "entete.php";
require "configuration.php";

if(isset($_POST["valider-identifiants"]))
{
    $_SESSION["pseudonyme"] = $_POST["pseudonyme"];
    $_SESSION["mot_de_passe"] = $_POST["mot_de_passe"];
    $_SESSION["courriel"] = $_POST["courriel"];
    //print_r($_SESSION);
}
?>
<section id="inscription">
    <h2>Inscription - Coordonnées personnelles (2/3)</h2>
    <form action="inscription-3.php" method="POST">
        <div>
            <label for="adresse">*Adresse: </label>
            <input type="text" name="adresse" placeholder="ex: 616 Avenue St-Rédempteur" required/>
        </div>
        <div>
            <label for="ville">*Ville: </label>
            <input type="text" name="ville" placeholder="ex: Matane" required/>
        </div>
        <div>
            <label for="pays">*Pays: </label>
            <input type="text" name="pays" placeholder="ex: Canada" required/>
        </div>
        <div>
            <label for="cellulaire">*Téléphone cellulaire: </label>
            <input type="text" name="cellulaire" placeholder="ex: 4184297894" required/>
        </div>
        <input type="submit" name="valider-coordonnees" value="Suivant"/>
        <p style="font-style: italic; font-size: 9pt;">Les champs précédés d'une astérisque (*) sont obligatoires</p>
    </form>
</section>
<?php include "pied-page.php"; ?>
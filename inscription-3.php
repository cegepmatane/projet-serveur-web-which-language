<?php
include "entete.php";
require "configuration.php";

if(isset($_POST["valider-coordonnees"]))
{
    $_SESSION["adresse"] = $_POST["adresse"];
    $_SESSION["ville"] = $_POST["ville"];
    $_SESSION["pays"] = $_POST["pays"];
    $_SESSION["cellulaire"] = $_POST["cellulaire"];
    //print_r($_SESSION);
}

?>
<section id="inscription">
    <h2>Inscription - Avatar (3/3)</h2>
    <form action="traitement-inscription.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="avatar">*Avatar: </label>
            <input type="file" name="avatar" required/>
        </div>
        <input type="submit" name="valider-avatar" value="Terminer"/>
        <p style="font-style: italic; font-size: 9pt;">Les champs précédés d'une astérisque (*) sont obligatoires</p>
    </form>
</section>
<?php include "pied-page.php"; ?>
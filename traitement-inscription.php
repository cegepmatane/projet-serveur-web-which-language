<?php 

include "entete.php";  
require "configuration.php";

$repertoireAvatar = $_SERVER['DOCUMENT_ROOT'] . "/projet-serveur-web-2020-Emustle/img/avatars/";
$avatar = $_FILES['avatar']['name'];
$fichierDestination = $repertoireAvatar . $avatar;
$fichierSource = $_FILES['avatar']['tmp_name'];
move_uploaded_file($fichierSource, $fichierDestination);

require CHEMIN_ACCESSEUR . "MembreDAO.php";

$filtresNouveauMembre = array();
$filtresNouveauMembre["pseudonyme"] = FILTER_SANITIZE_ENCODED;
$filtresNouveauMembre["mot_de_passe"] = FILTER_SANITIZE_ENCODED;
$filtresNouveauMembre["courriel"] = FILTER_SANITIZE_EMAIL;
$filtresNouveauMembre["adresse"] = FILTER_SANITIZE_ENCODED;
$filtresNouveauMembre["ville"] = FILTER_SANITIZE_ENCODED;
$filtresNouveauMembre["pays"] = FILTER_SANITIZE_ENCODED;
$filtresNouveauMembre["cellulaire"] = FILTER_SANITIZE_NUMBER_INT;
$filtresNouveauMembre["avatar"] = FILTER_SANITIZE_ENCODED;

$nouveauMembre = filter_var_array($_SESSION, $filtresNouveauMembre);
$nouveauMembre["avatar"] = $avatar;
$reussiteInscription = MembreDAO::enregistrerMembre($nouveauMembre);

?>
<section id="inscription">
    <?php
    if($reussiteInscription)
    {
        ?>
        <h2>Merci ! Votre inscription à Which Language a été enregistrée correctement.</h2>
        <?php
    }
    ?>
</section>
<?php include "pied-page.php"; ?>
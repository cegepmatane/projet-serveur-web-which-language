<?php 

include "entete.php";  
require "configuration.php";

$repertoireAvatar = $_SERVER['DOCUMENT_ROOT'] . "/projet-serveur-web-2020-Emustle/img/avatars/";
$avatar = $_FILES['avatar']['name'];
$fichierDestination = $repertoireAvatar . $avatar;
$fichierSource = $_FILES['avatar']['tmp_name'];
move_uploaded_file($fichierSource, $fichierDestination);

require CHEMIN_ACCESSEUR . "MembreDAO.php";

$filtresNouveauMembre = array(
    'pseudonyme' => FILTER_SANITIZE_ENCODED,
    'mot_de_passe' => FILTER_SANITIZE_ENCODED,
    'courriel' => FILTER_SANITIZE_EMAIL,
    'adresse' => FILTER_SANITIZE_ENCODED,
    'ville' => FILTER_SANITIZE_ENCODED,
    'pays' => FILTER_SANITIZE_ENCODED,
    'cellulaire' => FILTER_SANITIZE_NUMBER_INT
);


$nouveauMembre = filter_var_array($_SESSION, $filtresNouveauMembre);
$nouveauMembre["avatar"] = $avatar;

$reussiteInscription = MembreDAO::enregistrerMembre($nouveauMembre);

//Effacement des données du tableau $_SESSION qui a été utilisé pour stocker les données d'inscription
//session_destroy();

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
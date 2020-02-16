<?php

print_r($_FILES);


$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/projet-serveur-web-2020-Emustle/img/";
$illustration = $_FILES['illustration']['name'];

echo $illustration;

$fichierDestination = $repertoireIllustration . $illustration;
$fichierSource = $_FILES['illustration']['tmp_name'];
echo $fichierSource;

if(move_uploaded_file($fichierSource, $fichierDestination))
{
?>
    L'envoi de l'illustration a réussi
    <img src="../img/<?= $illustration ?>" alt=""/>

<?php
}

include("connexion.php");

$nom = $_POST["nom"];
$auteur = $_POST["auteur"];
$date =$_POST["date"];
$description = $_POST["description"];
$utilisation = $_POST["utilisation"];

$MESSAGE_AJOUT_LANGAGE = "INSERT INTO langage (nom, auteur, date, description, utilisation, illustration)
                            VALUES ('" . $nom . "', "
                            . "'" . $auteur . "', "
                            . "'" . $date . "', "
                            . "'" . $description . "', "
                            . "'" . $utilisation . "', "
                            . "'" . $illustration . "');";

$requete = $connexion->prepare($MESSAGE_AJOUT_LANGAGE);
$requete->execute();

$reussiteAjout = $requete;
if($reussiteAjout)
{
?>
    Votre film a été ajouté à la base de données!
<?php
}

?>
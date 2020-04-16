<?php
require "configuration.php";
require CHEMIN_ACCESSEUR . "MembreDAO.php";

include "entete.php";

//Si un utilisateur est déjà connecté
$estConnecte = isset($_SESSION["estConnecte"]);

if($estConnecte)
{
    $membre = MembreDAO::lireMembreParPseudonyme($_SESSION["pseudonyme"]);
    include "espace-membre.php";
}
else
{
    if(isset($_POST["action-connexion"]))
    {
        $membre = MembreDAO::validerConnexion($_POST);
        $connexionValide = isset($membre["id"]);
        if($connexionValide)
        {
            $_SESSION["estConnecte"] = true;
            $_SESSION["pseudonyme"] = $membre["pseudonyme"];
        }
        //Que la connexion ai réussie ou pas, on recharge la page afin de soit :
        // - afficher toutes les informations du membre
        //Soit :
        // - Réafficher la page de connexion afin que de bons identifiants soient entrés
        header("Refresh:0");
        exit();
    }
    else
    {
        include "authentification.php";
    }
}
include "pied-page.php";
?>
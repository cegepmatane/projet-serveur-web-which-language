<?php
require CHEMIN_ACCESSEUR ."BaseDeDonnees.php";

class LangageDAO
{
    public static function lireLangage($id)
    {
        $set_utf = BaseDeDonnees::getConnexion()->prepare("SET NAMES UTF8"); 
        $set_utf->execute(); 

        $REQUETE_DETAIL_LANGAGE = "SELECT id, nom, auteur, date, description, utilisation, illustration FROM langage WHERE id=:id;";

        $requete = BaseDeDonnees::getConnexion()->prepare($REQUETE_DETAIL_LANGAGE);
        $requete->bindParam(':id', $id, PDO::PARAM_INT);
        $requete->execute();
        $langage = $requete->fetch();

        return $langage;
    }

    public static function listerLangages()
    {
        $set_utf=BaseDeDonnees::getConnexion()->prepare("SET NAMES UTF8"); 
        $set_utf->execute(); 

        $REQUETE_LISTE_LANGAGES = "SELECT id, nom, auteur, date, description, utilisation, illustration from langage;";

        $requeteListe = BaseDeDonnees::getConnexion()->prepare($REQUETE_LISTE_LANGAGES);
        $requeteListe->execute();
        $listeLangages = $requeteListe->fetchAll();

        return $listeLangages;
    }

    public static function ajouterLangage($langage)
    {
        $MESSAGE_AJOUT_LANGAGE = "INSERT INTO langage (nom, auteur, date, description, utilisation, illustration)
                            VALUES (:nom, :auteur, :date, :description, :utilisation, :illustration);";

        $requeteAjout = BaseDeDonnees::getConnexion()->prepare($MESSAGE_AJOUT_LANGAGE);
        $requeteAjout->bindParam(':nom', $langage['nom'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':auteur', $langage['auteur'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':date', $langage['date'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':description', $langage['description'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':utilisation', $langage['utilisation'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':illustration', $langage['illustration'], PDO::PARAM_STR);
        $requeteAjout->execute();

        return $requeteAjout;
    }

    public static function modifierLangage($langage)
    {
        $MESSAGE_MODIF_LANGAGE = "UPDATE langage 
                            SET nom=:nom, auteur=:auteur, date=:date, description=:description, utilisation=:utilisation, illustration=:illustration
                            WHERE id=:id;";

        $requeteModif = BaseDeDonnees::getConnexion()->prepare($MESSAGE_MODIF_LANGAGE);
        $requeteModif->bindParam(':id', $langage['id'], PDO::PARAM_STR);
        $requeteModif->bindParam(':nom', $langage['nom'], PDO::PARAM_STR);
        $requeteModif->bindParam(':auteur', $langage['auteur'], PDO::PARAM_STR);
        $requeteModif->bindParam(':date', $langage['date'], PDO::PARAM_STR);
        $requeteModif->bindParam(':description', $langage['description'], PDO::PARAM_STR);
        $requeteModif->bindParam(':utilisation', $langage['utilisation'], PDO::PARAM_STR);
        $requeteModif->bindParam(':illustration', $langage['illustration'], PDO::PARAM_STR);
        $requeteModif->execute();

        return $requeteModif;
    }

    public static function supprimerLangage($langage)
    {
        $MESSAGE_SUPPR_LANGAGE = "DELETE FROM langage WHERE id=:id;";

        $requeteSuppr = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SUPPR_LANGAGE);
        $requeteSuppr->bindParam(':id', $langage['id'], PDO::PARAM_STR);
        $requeteSuppr->execute();

        return $requeteSuppr;
    }
}

?>
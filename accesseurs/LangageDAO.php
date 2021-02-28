<?php
require_once CHEMIN_ACCESSEUR ."BaseDeDonnees.php";

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

    public static function rechercherSimple($recherche)
    {
        $set_utf=BaseDeDonnees::getConnexion()->prepare("SET NAMES UTF8"); 
        $set_utf->execute(); 

        $REQUETE_RECHERCHE_LANGAGES = "SELECT id, nom, auteur, date, description, utilisation, illustration from langage
                                    WHERE id LIKE '%$recherche%' OR nom LIKE '%$recherche%' OR auteur LIKE '%$recherche%'
                                    OR date LIKE '%$recherche%' OR description LIKE '%$recherche%' OR utilisation LIKE '%$recherche%'
                                    OR illustration LIKE '%$recherche%';";

        $requeteRecherche = BaseDeDonnees::getConnexion()->prepare($REQUETE_RECHERCHE_LANGAGES);
        //$requeteRecherche->bindParam(':recherche', $recherche, PDO::PARAM_STR);
        $requeteRecherche->execute();
        $resultats = $requeteRecherche->fetchAll();

        return $resultats;
    }

    public static function rechercherAvancee($message)
    {
        $set_utf=BaseDeDonnees::getConnexion()->prepare("SET NAMES UTF8"); 
        $set_utf->execute(); 

        $requeteRecherche = BaseDeDonnees::getConnexion()->prepare($message);
        $requeteRecherche->execute();
        $resultats = $requeteRecherche->fetchAll();

        return $resultats;
    }


    public static function ajouterLangage($langage)
    {
        $MESSAGE_AJOUT_LANGAGE = "INSERT INTO langage (nom, auteur, date, description, utilisation, illustration, categorie, utilisateurs)
                            VALUES (:nom, :auteur, :date, :description, :utilisation, :illustration, :categorie, :utilisateurs);";

        $requeteAjout = BaseDeDonnees::getConnexion()->prepare($MESSAGE_AJOUT_LANGAGE);
        $requeteAjout->bindParam(':nom', $langage['nom'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':auteur', $langage['auteur'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':date', $langage['date'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':description', $langage['description'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':utilisation', $langage['utilisation'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':illustration', $langage['illustration'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':categorie', $langage['categorie'], PDO::PARAM_STR);
        $requeteAjout->bindParam(':utilisateurs', $langage['utilisateurs'], PDO::PARAM_STR);
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

    public static function listerCategories()
    {
        $MESSAGE_LISTER_CATEGORIES = "SELECT categorie, COUNT(nom) as nombre_langages, SUM(utilisateurs) as nombre_utilisateurs, MIN(date) as plus_ancien, MAX(date) as plus_recent FROM langage GROUP BY categorie ORDER BY nombre_utilisateurs DESC";

        $requeteCategories = BaseDeDonnees::getConnexion()->prepare($MESSAGE_LISTER_CATEGORIES);
        $requeteCategories->execute();
        $categories = $requeteCategories->fetchAll();

        return $categories;
    }
}

?>
<?php
require CHEMIN_ACCESSEUR . "BaseDeDonnees.php";

class MembreDAO
{
    public static function validerConnexion($membre)
    {
        $MESSAGE_SQL_CONNEXION_MEMBRE = "SELECT id, pseudonyme, mot_de_passe FROM membre WHERE pseudonyme=:pseudonyme AND mot_de_passe=:mot_de_passe;";

        $requeteConnexionMembre = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_CONNEXION_MEMBRE);
        $requeteConnexionMembre->bindParam(':pseudonyme', $membre["pseudonyme"], PDO::PARAM_STR);
        $requeteConnexionMembre->bindParam(':mot_de_passe', $membre["mot_de_passe"], PDO::PARAM_STR);
        $requeteConnexionMembre->execute();
        $membre = $requeteConnexionMembre->fetch();
        //Si la requete a fonctionné seulement, on retourne le membre
        return $membre;
    }

    public static function enregistrerMembre($nouveauMembre)
    {
        $MESSAGE_SQL_INSCRIPTION = "INSERT INTO membre (pseudonyme, mot_de_passe, courriel, adresse, ville, pays, cellulaire, avatar)
            VALUES (:pseudonyme, :mot_de_passe, :courriel, :adresse, :ville, :pays, :cellulaire, :avatar);";

        $requeteInscriptionMembre = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_INSCRIPTION);
        $requeteInscriptionMembre->bindParam(':pseudonyme', $nouveauMembre["pseudonyme"], PDO::PARAM_STR);
        $requeteInscriptionMembre->bindParam(':mot_de_passe', $nouveauMembre["mot_de_passe"], PDO::PARAM_STR);
        $requeteInscriptionMembre->bindParam(':courriel', $nouveauMembre["courriel"], PDO::PARAM_STR);
        $requeteInscriptionMembre->bindParam(':adresse', $nouveauMembre["adresse"], PDO::PARAM_STR);
        $requeteInscriptionMembre->bindParam(':ville', $nouveauMembre["ville"], PDO::PARAM_STR);
        $requeteInscriptionMembre->bindParam(':pays', $nouveauMembre["pays"], PDO::PARAM_STR);
        $requeteInscriptionMembre->bindParam(':cellulaire', $nouveauMembre["cellulaire"], PDO::PARAM_STR);
        $requeteInscriptionMembre->bindParam(':avatar', $nouveauMembre["avatar"], PDO::PARAM_STR);
        $reussiteInscription = $requeteInscriptionMembre->execute();
        return $reussiteInscription;
    }
}

?>